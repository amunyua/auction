<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserRoleController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index(){
        return view('users.roles');
    }
}
