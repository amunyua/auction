<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Masterfile;
use App\Address;
use App\Role;
use App\CustomerType;
use App\AddressType;
use App\County;
use App\User;
use App\AllMfs;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class MasterfileController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        // fetch data for select list
        $roles = Role::all();
        $cts = CustomerType::all();
        $addresses = AddressType::all();
        $counties = County::all();

        return view('masterfile.index', array(
            'cts' => $cts,
            'roles' => $roles,
            'addresses' => $addresses,
            'counties' => $counties
        ));
    }

    public function allMfs(){
        $mfs = Masterfile::all();
        return view('masterfile.all_mfs')->withMfs($mfs);
    }

    public function addMf(Request $request){
//        var_dump($_POST);exit;
        // validate
        $this->validate($request, array(
            'surname' => 'required|max:255',
            'firstname' => 'required',
            'id_passport' => 'required|unique:masterfiles',
            'gender' => 'required',
            'email' => 'required|unique:masterfiles',
            'b_role' => 'required',
            'user_role' => 'required',
            'customer_type_name' => 'required',
            'county' => 'required',
            'town' => 'required',
            'phone' => 'required',
            'postal_address' => 'required',
            'postal_code' => 'required',
            'address_type_name' => 'required'
        ));

        DB::transaction(function(){
            // add to db
            $mf = Masterfile::create(array(
                'surname' => Input::get('surname'),
                'firstname' => Input::get('firstname'),
                'middlename' => Input::get('middlename'),
                'email' => Input::get('email'),
                'id_passport' => Input::get('id_passport'),
                'b_role' => Input::get('b_role'),
                'gender' => Input::get('gender'),
                'user_role' => Input::get('user_role'),
                'reg_date' => Input::get('reg_date'),
                'customer_type_name' => Input::get('customer_type_name'),
                'image_path' => Input::get('image_path')
            ));
            $mf->save();
            $mf_id = $mf->id;


            // add address details
            $address = Address::create(array(
                'county' => Input::get('county'),
                'town' => Input::get('town'),
                'masterfile_id' => $mf_id,
                'ward' => Input::get('ward'),
                'street' => Input::get('street'),
                'building' => Input::get('building'),
                'phone' => Input::get('phone'),
                'postal_address' => Input::get('postal_address'),
                'postal_code' => Input::get('postal_code'),
                'address_type_name' => Input::get('address_type_name')
            ));
            $address->save();

            // create user login account
            $password = sha1(123456);
            $login = User::create(array (
                'masterfile_id' => $mf_id,
                'email' => Input::get('email'),
                'password' => $password
            ));
//            var_dump($login);exit;
            $login->save();
        });

        $request->session()->flash('success', 'The Masterfile has been added');
        return redirect('/masterfile');
    }

    public function masterfile(){
        $mfs = Masterfile::all();
        return view('masterfile.all', array(
            'mfs' => $mfs
        ));
    }

    public function updateMf(Request $request, $id){
        // get selected id
        $edit_mf = Masterfile::find($id);
        if($edit_mf->mf_id != $request->input('mf_id')) {
            $this->validate($request, array(
                'surname' => 'required',
                'firstname' => 'required',
                'id_passport' => 'required|unique:masterfiles,id_passport',
                'email' => 'required|unique:masterfiles,email',
                'reg_date' => 'required',
                'user_role' => 'required',
                'customer_type_name' => 'required',
                'gender' => 'required',
            ));
        }else{
            $this->validate($request, array(
                'surname' => 'required',
                'firstname' => 'required',
                'id_passport' => 'required',
                'email' => 'required',
                'reg_date' => 'required',
                'user_role' => 'required',
                'customer_type_name' => 'required',
                'gender' => 'required',
            ));
        }

        // update db record
        $edit_mf->b_role = $request->input('b_role');
        $edit_mf->surname = $request->input('surname');
        $edit_mf->firstname =$request->input('firstname');
        $edit_mf->gender =$request->input('gender');
        $edit_mf->image_path =$request->input('image_path');
        $edit_mf->id_passport =$request->input('id_passport');
        $edit_mf->user_role =$request->input('user_role');
        $edit_mf->customer_type_name =$request->input('customer_type_name');

        $edit_mf->save();

        Session::flash('success','Masterfile record has been updated');
        return redirect()->route('masterfile.edit_mf');
    }

    public function destroy(Request $request){
        if(Masterfile::destroy($request->id)){
            $request->session()->flash('Masterfile has been deleted');
        }
    }
}
