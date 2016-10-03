<?php

namespace App\Http\Controllers;

use App\Auction;
use App\Item;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class AuctionController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index(){
        $auctions = Auction::all();
        $items = Item::all();
        return view('auction_manager.index', array(
            'auctions' => $auctions,
            'items' => $items
        ));
    }

    public function store(Request $request){
        // validate
        $this->validate($request, array(
            'item' => 'required',
            'auto_rollover' => 'required',
            'reserve_price' => 'required|numeric',
            'bid_cost' => 'required|numeric',
            'refresh_rate' => 'required|numeric',
            'buy_now_option' => 'required',
            'buy_now_price' => 'required',
            'start_date' => 'required'
        ));

        $auction = Auction::create(array(
            'item_id' => Input::get('item'),
            'auto_rollover' => Input::get('auto_rollover'),
            'reserve_price' => Input::get('reserve_price'),
            'bid_cost' => Input::get('bid_cost'),
            'refresh_rate' => Input::get('refresh_rate'),
            'buy_now_option' => Input::get('buy_now_option'),
            'buy_now_price' => Input::get('buy_now_price'),
            'start_date' => Input::get('start_date'),
            'status' => '1'
        ));
        $auction->save();

        $request->session()->flash('status', 'Auction Item has been added');
        return redirect('/auction-items');
    }
}
