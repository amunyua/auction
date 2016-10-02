<?php

namespace App\Http\Controllers;

use App\RequestType;
use App\ServiceChannel;
use App\RevenueChannel;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class ServiceChannelController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function serviceChannels(){
        $service_channels = ServiceChannel::all();
        $revenue_channels = RevenueChannel::all();
        $rts = RequestType::all();

        return view('revenue_manager.manage_sc', array(
            'service_channels' => $service_channels,
            'revenue_channels' => $revenue_channels,
            'rts' => $rts
        ));
    }

    public function store(Request $request){
        $this->validate($request, array(
            'revenue_channel' => 'required',
            'service_option' => 'required|unique:service_channels',
            'option_code' => 'required|unique:service_channels',
            'price' => 'required|numeric',
            'option_type' => 'required',
            'request_type' => 'required'
        ));

        $sc = ServiceChannel::create(array(
            'revenue_channel_id' => Input::get('revenue_channel'),
            'service_option' => Input::get('service_option'),
            'option_code' => Input::get('option_code'),
            'price' => Input::get('price'),
            'parent_id' => (!empty(Input::get('parent'))) ? Input::get('parent') : NULL,
            'service_option_type' => Input::get('option_type'),
            'request_type_id' => Input::get('request_type'),
            'status' => '1'
        ));
        $sc->save();

        $request->session()->flash('status', 'Service Channel has been added');
        return redirect('service-channels');
    }
}
