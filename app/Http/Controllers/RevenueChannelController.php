<?php

namespace App\Http\Controllers;

use App\IfmisHeadcode;
use App\IfmisSubcode;
use App\RevenueChannel;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class RevenueChannelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function revenueChannels(){
        $rcs = RevenueChannel::all();
        $ifmis_headcodes = IfmisHeadcode::all();

        return view('revenue_manager.manage_rc', array(
            'rcs' => $rcs,
            'ifmis_headcodes' => $ifmis_headcodes
        ));
    }

    /**
     * @param Request $request
     * Add Revenue Channel
     */
    public function store(Request $request){
        $this->validate($request, array(
            'revenue_channel_name' => 'required|unique:revenue_channels',
            'revenue_channel_code' => 'required|unique:revenue_channels'
        ));

        $headcode_id = NULL;
        if(!empty($request->ifmis_subcode)){
            $ifmis = IfmisSubcode::find($request->ifmis_subcode);
            $headcode_id = $ifmis->ifmis_headcode_id;
        }

        $rev = RevenueChannel::create(array(
            'revenue_channel_name' => Input::get('revenue_channel_name'),
            'revenue_channel_code' => Input::get('revenue_channel_code'),
            'ifmis_headcode_id' => $headcode_id,
            'ifmis_subcode_id' => !empty(Input::get('ifmis_subcode')) ? Input::get('ifmis_subcode') : NULL
        ));
        $rev->save();

        $request->session()->flash('status', 'The revenue channel has been added!');
        return redirect('revenue-channels');
    }
}
