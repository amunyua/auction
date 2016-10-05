<?php

namespace App\Http\Controllers;

use App\Item ;
use App\Category;
use App\Masterfile;
use App\StockTransaction;
use App\SubCategory;
use App\TransactionCategory;
use App\TransactionType;
use App\Warehouse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class NewInventoryController extends Controller
{
    private $_request;
    private $_stock_level = '';
    private $_image_path = Null;
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $items = Item::all();
        return view('inventory.all-items')->withItems($items);

}
    public function addItem(){

        return view('inventory.add-items',array(
            'categories'=>Category::all(),
            'subcategories'=>SubCategory::all(),
            'suppliers'=>Masterfile::all(),
            'warehouses'=>Warehouse::all(),
            'transaction_types'=>TransactionType::all(),
            'transaction_categories'=>TransactionCategory::all()
        ));


    }

    public function storeItem(Request $request){

//        var_dump($_POST);die;
        //validation
        $this->validate($request,array(
            'category_id'=>'required',
            'item_name'=>'required|min:2',
            'purchase_price'=>'required|numeric',
            'initial_stock'=>'required|numeric',
            'main_image_path'=>'required|image',
            'stock_reorder_level'=>'required|numeric',
            'warehouse_id'=>'required',
            'transaction_type_id'=>'required',
            'transaction_category_id'=>'required'
        ));
        if ($request->hasFile('main_image_path')) {
            $file = $request->file('main_image_path');
//            var_dump($file);die;
            $path = Storage::putFile('public', $file);
        }

        DB::transaction(function (){
           $item = new Item();
            $item->item_name = Input::get('item_name');
            $item->item_code = Input::get('item_code');
            $item->category_id = Input::get('category_id');
            $item->sub_category_id = Input::get('sub_category_id');
            $item->masterfile_id = Input::get('masterfile_id');
            $item->image_path = Input::get('main_image_path');
            $item->purchase_price = Input::get('purchase_price');
            $item->initial_stock = Input::get('initial_stock');
            $item->warehouse_id = Input::get('warehouse_id');
            $item->stock_reorder_level = Input::get('stock_reorder_level');
            $item->stock_level = Input::get('initial_stock');

            //save into the database
            $item->save();
            $item_id =$item->id;

            $stock_transaction = new StockTransaction();
            $stock_transaction->item_id = $item_id;
            $stock_transaction->transaction_type_id =Input::get('transaction_type_id');
            $stock_transaction->transaction_category_id =Input::get('transaction_category_id');
            $stock_transaction->warehouse_id =Input::get('warehouse_id');
            $stock_transaction->quantity =Input::get('initial_stock');

            $stock_transaction->save();
        });
        Session::flash('success','Inventory item has been created');
        return redirect()->route('add-items.index');

    }
    public function uploadImages(){

    }
    public function stockTransactions(){
        $transactions = StockTransaction::all();
        return view('inventory.stock-transactions',array(
            'transactions'=>$transactions,
            'items'=>Item::all(),
            'transaction_types'=>TransactionType::all(),
            'transaction_categories'=>TransactionCategory::all(),
            'warehouses'=>Warehouse::all(),

        ));
    }

    public function createTransaction(Request $request){
        //validation
        $this->_request =$request;
        $this->validate($request, array(
            'item_id'=>'required',
            'transaction_type_id'=>'required',
            'transaction_category_id'=>'required',
            'warehouse_id'=>'required',
            'quantity'=>'required|numeric'
        ));

        //save the items into the db
        DB::transaction(function (){
        $item = Item::find($this->_request->item_id);
         $stock_level = $item->stock_level;

         $transaction_t = TransactionType::find($this->_request->transaction_type_id);
            $transaction_type = strtolower($transaction_t->transaction_type_name);
            switch ($transaction_type){
                case 'add':
                $this->_stock_level = ($stock_level + $this->_request->quantity);
                    break;
                case 'subtract':
                    if($stock_level < $this->_request->quantity){
                        Session::flash('warning','Quantity cannot be grater than the stock available');
                       return false;
                    }
                    $this->_stock_level = ($stock_level - $this->_request->quantity);
                    break;
            }
            $item = Item::find($this->_request->item_id);
            $item->stock_level = $this->_stock_level;
            $item->save();

        $user = Auth::user();
        $stock_transaction = new StockTransaction();
        $stock_transaction->item_id = $this->_request->item_id;
        $stock_transaction->transaction_type_id =$this->_request->transaction_type_id;
        $stock_transaction->transaction_category_id = $this->_request->transaction_category_id;
        $stock_transaction->warehouse_id =$this->_request->warehouse_id;
        $stock_transaction->quantity = $this->_request->quantity;
        $stock_transaction->transacted_by = $user->id;

        $stock_transaction->save();
        Session::flash('success','The stock transaction has been created');

    });

        return redirect()->route('stock-transactions.index');




    }
}
