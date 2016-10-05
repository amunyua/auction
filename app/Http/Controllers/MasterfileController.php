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
        // fetch data
        $roles = Role::all();
        $cts = CustomerType::all();
        $addresses = AddressType::all();
        $counties = County::all();

        return view('masterfile.index', array(
            'cts' => $cts,
            'roles' => $roles,
            'addresses' => $addresses,
            'counties' => $counties,
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

        DB::transaction(function($path){
            // upload image if exists
            $path = '';
            if(Input::hasFile('image_path')){
                $prefix = uniqid();
                $image = Input::file('image_path');
                $filename = $image->getClientOriginalName();
                $new_name = $prefix.$filename;

                if($image->isValid()) {
                    $image->move('uploads/images', $new_name);
                    $path = 'uploads/images/'.$new_name;
                }
            }
//            var_dump($path);exit;

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
                'image_path' => $path
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
        // validate
        $this->validate($request, array(
            'surname' => 'required',
            'firstname' => 'required',
            'id_passport' => 'required|unique:masterfiles,id_passport,'.$id,
            'email' => 'required|unique:masterfiles,email,'.$id,
            'reg_date' => 'required|date',
            'user_role' => 'required',
            'customer_type_name' => 'required'
        ));


            // upload image if exists
            $path = '';
            if(Input::hasFile('image_path')){
                $prefix = uniqid();
                $image = Input::file('image_path');
                $filename = $image->getClientOriginalName();
                $new_name = $prefix.$filename;

                if($image->isValid()) {
                    $image->move('uploads/images', $new_name);
                    $path = 'uploads/images/'.$new_name;
                }
            }
            // var_dump($path);exit;

            // update db record
            Masterfile::where('id', $id)
                ->update(array(
                    'b_role' => $request->b_role,
                    'surname' => $request->surname,
                    'firstname' => $request->firstname,
                    'gender' => $request->gender,
                    'image_path' => $path,
                    'id_passport' => $request->id_passport,
                    'customer_type_name' => $request->customer_type_name,
                    'user_role' => $request->user_role
                ));


        $request->session()->flash('success', 'Masterfile Channel has been updated');
        return redirect('edit_mf/'.$id);
    }

    public function destroy(Request $request){
        if(Masterfile::destroy($request->id)){
            $request->session()->flash('Masterfile has been deleted');
        }
    }

    public function getMf(Request $request){
        $mf_id = $request->id;
        $mf = Masterfile::find($mf_id);

        $roles = Role::all();
        $cts = CustomerType::all();
        return view('masterfile.edit_mf', array(
            'mf' => $mf,
            'roles' => $roles,
            'cts' => $cts,
            'mf_id' => $mf_id
        ));
    }

    public function mfProfile(Request $request){
        $mf_id = $request->id;
        $mf = Masterfile::find($mf_id);
        return view('masterfile.mf_profile', array(
            'mf' => $mf
        ));
    }

    public function getMfProfile(Request $request){
        // get mf_id
        $mf_id = $request->id;
        $mf = Masterfile::find($mf_id);
        // get mf address info
        $addresses = Address::where('masterfile_id', $mf_id)->get();
        return view('masterfile.mf_profile')->with(array(
            'mf' => $mf,
            'addresses'=>$addresses
        ));
    }

}
