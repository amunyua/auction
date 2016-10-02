<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Masterfile;
use App\CustomerType;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class MasterfileController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $ct = CustomerType::all();

        return view('masterfile.index', array(
            'customer_types' => $ct
        ));
    }

    public function store(Request $request){
        // validate
        $this->validate($request, array(
            'surname' => 'required|max:255',
            'firstname' => 'required',
            'middlename' => 'required',
            'email' => 'required|unique:masterfile',
            'id_passport' => 'required|unique:masterfile',
            'b_role' => 'required',
            'gender' => 'required',
            'user_role' => 'required',
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
                'address_type_id' => Input::get('address_type_id')
            ));
            $address->save();

            // create user login account
            $password = sha1(123456);
            $login = Login::create(array (
                'mf_id' => $mf_id,
                'username' => Input::get('username'),
                'email' => Input::get('email'),
                'password' => $password
            ));
            $login->save();
        });

        $request->session()->flash('status', 'The Masterfile has been added');
    }

    public function masterfile(){
        $mfs = Masterfile::all();
        return view('masterfile.all', array(
            'mfs' => $mfs
        ));
    }

    public function update(Request $request){
        // validate

        // update db record
        Masterfile::where('id', $request->id)
            ->update(array(
                'surname' => Input::get('surname')
            ));


    }

    public function destroy(Request $request){
        if(Masterfile::destroy($request->id)){
            $request->session()->flash('Masterfile has been deleted');
        }
    }
}
