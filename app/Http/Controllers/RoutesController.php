<?php

namespace App\Http\Controllers;

use App\Route;
use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;

use App\Http\Requests;

class RoutesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('system.routes');
    }

    public function loadRoutes(){
        return Datatables::of(Route::query())->make(true);
    }
}
