<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function buyNowPurchases(){

    }

    public function bidSales(){

    }

    public function onlineShopping(){

    }
}
