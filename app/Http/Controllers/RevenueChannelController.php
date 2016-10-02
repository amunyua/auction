<?php

namespace App\Http\Controllers;

use App\RevenueChannel;
use Illuminate\Http\Request;

use App\Http\Requests;

class RevenueChannelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function revenueChannels(){
        $rcs = RevenueChannel::all();
        return view('revenue_channel.manage_rc', array(
            'rcs' => $rcs
        ));
    }
}
