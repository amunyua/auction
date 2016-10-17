<?php

namespace App\Http\Controllers;

use App\Image;
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

use App\Http\Requests;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;

class NewInventoryController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    private $_paths = array();
    private $_request;
    private $_stock_level = '';
    private $_image_path = Null;

    public function index(){
        $items = Item::all();
        return view('inventory.all-items')->withItems($items);

}
    public function addItem(){

        return view('inventory.add-items',array(
            'categories'=>Category::all(),
            'subcategories'=>SubCategory::all(),
            'suppliers'=>Masterfile::where('b_role','=','Supplier'),
            'warehouses'=>Warehouse::all(),
            'transaction_types'=>TransactionType::all(),
            'transaction_categories'=>TransactionCategory::all()
        ));


    }

    public function storeItem(Request $request){
//        var_dump($_POST);die;
        $this->validate($request,array(
            'item_name'=>'required|min:2|unique:items,item_name',
            'purchase_price'=>'required|numeric',
            'initial_stock'=>'required|numeric',
            'main_image_path'=>'required|image',
            'stock_reorder_level'=>'required|numeric',
            'warehouse_id'=>'required',
            'transaction_type_id'=>'required',
            'transaction_category_id'=>'required'
        ));

        DB::transaction(function (){

            $path = '';
            if(Input::hasFile('main_image_path')){
                $prefix = uniqid();
                $image = Input::file('main_image_path');
                $filename = $image->getClientOriginalName();
                $ext = $image->getClientOriginalExtension();

                $new_name = md5($prefix);
                $path = $new_name.'.'.$ext;

                if($image->isValid()) {
                    $image->move('uploads/images', $path);
                   $img_path = 'uploads/images/'.$path;
                    $this->_image_path = $img_path;
               }
            }

            $category_id = Category::find(Input::get('sub_category_id'));

           $item = new Item();
            $item->item_name = Input::get('item_name');
            $item->item_code = Input::get('item_code');
            $item->category_id = $category_id->id;
            $item->sub_category_id = Input::get('sub_category_id');
            $item->masterfile_id = Input::get('masterfile_id');
            $item->image_path = $this->_image_path;
            $item->purchase_price = Input::get('purchase_price');
            $item->initial_stock = Input::get('initial_stock');
            $item->warehouse_id = Input::get('warehouse_id');
            $item->stock_reorder_level = Input::get('stock_reorder_level');
            $item->stock_level = Input::get('initial_stock');

            //save into the database
            $item->save();
            $item_id =$item->id;

            session_start();
            if(isset($_SESSION['path'])) {
                foreach ($_SESSION['path'] as $path) {
                    echo $path;
                $image = new Image();
                $image->item_id = $item_id;
              $image->image_path = $path;
                $image->save();
                }
                unset($_SESSION['path']);
            }


            $user = Auth::user();

            $stock_transaction = new StockTransaction();
            $stock_transaction->item_id = $item_id;
            $stock_transaction->transaction_type_id =Input::get('transaction_type_id');
            $stock_transaction->transaction_category_id =Input::get('transaction_category_id');
            $stock_transaction->warehouse_id =Input::get('warehouse_id');
            $stock_transaction->quantity =Input::get('initial_stock');
            $stock_transaction->transacted_by = $user->id;
            $stock_transaction->save();

            //insert other images to more images table

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
//        var_dump($_SESSION['path']);die;
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
            if(isset($_SESSION['path'])&& !empty($_SESSION['path'])){
                $image = new Image();


            }

        Session::flash('success','The stock transaction has been created');

    });

        return redirect()->route('stock-transactions.index');




    }

    public function uploadInventoryPics(Request $request){
        session_start();
        $image = $request->file('file');
        $prefix = uniqid();
        $file_name = $image->getClientOriginalName();
        $ext = $image->getClientOriginalExtension();
        $new_name_ = $prefix.$file_name;
        $new_name = md5($new_name_).'.'.$ext;

        if(Input::hasFile('file')){
            if($image->isValid()) {
                $image->move('uploads/images', $new_name);
                $path = 'uploads/images/'.$new_name;

                $_SESSION['path'][] = $path;
            }
        }
    }

    public function getItemDetails($id){
        $results = Item::find($id);
        return json_encode($results);
    }

}
