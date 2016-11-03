<?php

namespace App\Http\Controllers;

use App\User;
use App\Manageuser;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Yajra\Datatables\Facades\Datatables;
use Illuminate\Http\Request;

class Manage_userController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index(){
        $users = User::all();

        return view('users.all_users', array(
            'users' => $users
        ));
    }

    public function loadAllusers(){
        return Datatables::queryBuilder(DB::table('users_view'))->editColumn('status',
            '@if($status)
                    Active
                @else
                    Blocked
                @endif')->make(true);
    }

    public function getUserData(Request $request){
        $id = $request->id;
        $user_data = User::find($id);
        return Response::json($user_data);
    }

    public function destroy(Request $request){
        if(User::destroy($request->ids)){
            $return = [ 'success' => true ];
        }else{
            $return = [ 'success' => false ];
        }
        return Response::json($return);
    }
}
