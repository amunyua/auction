<?php

namespace App\Http\Controllers;

use App\Auction;
use Illuminate\Http\Request;

use App\Http\Requests;

class AuctionController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index(){
        $auctions = Auction::all();
        return view('auction_manager.index', array(
            'auctions' => $auctions
        ));
    }
}
