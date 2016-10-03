<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

use App\Http\Requests;

class NewInventoryController extends Controller
{
    public function addItem(){
        return view('inventory.add-items');
    }
}
