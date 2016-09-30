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
            'id_passport' => 'required|unique:masterfiles'
        ));

        DB::transaction(function(){
            // add to db
            $mf = Masterfile::create(array(
                'surname' => Input::get('surname'),
                'firstname' => Input::get('firstname')
            ));
            $mf->save();
            $mf_id = $mf->id;

            // add address details

            // create user login account
        });

        $request->session()->flash('status', 'The Masterfile has been added');
    }

    public function masterfiles(){
        $mfs = Masterfile::all();

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
