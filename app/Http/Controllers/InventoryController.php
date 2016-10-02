<?php

namespace App\Http\Controllers;

use App\Category;
use App\SubCategory;
use App\Warehouse;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class InventoryController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function getIndex(){
        return view('inventory.index');
    }

    public function getCategories(){
        $categories = Category::all();

        return view('inventory.categories')->withCategories($categories);

    }

    public function getAilments($id){
        $ailments = Category::find($id);
        return json_encode($ailments);
    }


    public function addCategory(Request $request){
//        var_dump($_POST);die;
        $this->validate($request, array(
            'category_name'=> 'required|unique:categories,category_name',
            'category_code'=>'required|unique:categories,category_code',
            'category_status'=>'required'
        ));

        $category = new Category();

        $category->category_name = $request->category_name;
        $category->category_code = $request->category_code;
        $category->category_status =$request->category_status;

        $category->save();

        Session::flash('success','The category has been added');
        return redirect()->route('category.index');

    }

    public function updateCategory(Request $request ,$id){
        //update category details
        $category = Category::find($id);
        //we start with validation
        if($category->category_name != $request->input('category_name')) {
            $this->validate($request, array(
                'category_name' => 'required|unique:categories,category_name',
                'category_code' => 'required',
                'category_status' => 'required'
            ));
        }else{
            $this->validate($request, array(
                'category_name' => 'required',
                'category_code' => 'required',
                'category_status' => 'required'
            ));
        }
        //define column names and values

        $category->category_name = $request->input('category_name');
        $category->category_code = $request->input('category_code');
        $category->category_status =$request->input('category_status');

        $category->save();

        Session::flash('success','The category has been updated');
        return redirect()->route('category.index');
    }
    public function destroyCategory($id){
        $category = Category::find($id);
        $category->delete();

        Session::flash('success','The category has been deleted');
        return redirect()->route('category.index');
    }


    public function getSubCategories(){
        $subcategories = SubCategory::all();
        $categories = Category::all();
        return view('inventory.subcategories')->with(array(
            'subcategories'=>$subcategories,
            'categories'=>$categories
        ));

    }
    public function addSubCategory(Request $request){
//        var_dump($_POST);die;
        $this->validate($request, array(
            'category_id'=>'required',
            'sub_category_name'=> 'required|unique:sub_categories,sub_category_name',
            'sub_category_code'=>'required|unique:sub_categories,sub_category_code',
            'sub_category_status'=>'required'
        ));

        $subcategory = new SubCategory();

        $subcategory->category_id = $request->category_id;
        $subcategory->sub_category_name = $request->sub_category_name;
        $subcategory->sub_category_code = $request->sub_category_code;
        $subcategory->sub_category_status =$request->sub_category_status;

        $subcategory->save();

        Session::flash('success','The sub category has been added');
        return redirect()->route('sub_category.store');

    }
    public function getWarehouses(){
        $warehouses = Warehouse::all();
        return view('inventory.warehouses')->withWarehouses($warehouses);
    }

    public function addWarehouse(Request $request){
        //var_dump($_POST);
        $this->validate($request, array(
            'warehouse_name'=> 'required|unique:warehouses,warehouse_name',
            'warehouse_code'=>'required|unique:warehouses,warehouse_code',
            'warehouse_status'=>'required'
        ));

        $warehouse = new Warehouse();

        $warehouse->warehouse_name = $request->warehouse_name;
        $warehouse->warehouse_code = $request->warehouse_code;
        $warehouse->warehouse_status =$request->warehouse_status;

        $warehouse->save();

        Session::flash('success','Warehouse added');
        return redirect()->route('warehouses.store');

    }
}
