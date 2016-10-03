<?php

namespace App\Http\Controllers;

use App\Item ;
use App\Category;
use App\Masterfile;
use App\SubCategory;
use App\TransactionCategory;
use App\TransactionType;
use App\Warehouse;
use Illuminate\Http\Request;

use App\Http\Requests;

class NewInventoryController extends Controller
{
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
//        var_dump($_POST);
        //validation
        $this->validate($request,array(
            'item_category'=>'required',
            'item_name'=>'required|min:2',
            'purchase_price'=>'required|numeric',
            'initial_stock'=>'required|numeric',
            'main_image_path'=>'required',
            'stock_reorder_level'=>'required|numeric',
            'warehouse'=>'required',
            'transaction_type'=>'required',
            'transaction_category'=>'required'

        ));

        DB::transaction(function (){
           $item = new Item();

        });

    }
}
