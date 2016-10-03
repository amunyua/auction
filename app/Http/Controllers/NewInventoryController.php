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

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class NewInventoryController extends Controller
{
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
            'main_image_path'=>'required',
            'stock_reorder_level'=>'required|numeric',
            'warehouse_id'=>'required',
            'transaction_type_id'=>'required',
            'transaction_category_id'=>'required'
        ));

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
    public function stockTransactions(){
        $transactions = StockTransaction::all();
        return view('inventory.stock-transactions')->withTransactions($transactions);
    }
}
