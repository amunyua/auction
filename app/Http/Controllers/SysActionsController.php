<?php

namespace App\Http\Controllers;

use App\Route;
use App\Sys_action;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Yajra\Datatables\Facades\Datatables;

use App\Http\Requests;

class SysActionsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $action = Sys_action::all();

        return view('system.sys_action', [
            'sys-actions' => $action
        ]);
    }

    public function loadActions(){
        return Datatables::of(Sys_action::query())
            ->editColumn('action_status',
                '@if($action_status)
                    Active 
                @else
                    Inactive
                @endif')
            ->editColumn('route_id',
                '@if(!empty($route_id))
                    {{ App\Sys_action::find($route_id)->route_name }}
                @endif')
            ->make(true);
    }

    public function getChildRoutes(){
        $child_routes = Route::whereNotNull('parent_route')->get();
        $return = [];
        if (count($child_routes)){
            foreach ($child_routes as $child){
                $return[] = [
                    'id' => $child->id,
                    'route_name' => $child->route_name
                ];
            }
        }
        return Response::json($return);
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'action_description' => 'required',
            'action_status' => 'required'
        ]);

        $return = [];
        if($validator->fails()){
            $return = [
                'success' => false,
                'errors' => $validator->getMessageBag()->toArray()
            ];
        }else{
            // add action
            $action = new Sys_action();
            $action->action_description = $request->action_description;
            $action->action_name = $request->action_name;
            $action->route_id = $request->route_id;
            $action->action_status = $request->action_status;
            $action->user_mfid = $request->user_mfid;
            $action->class = $request->class;
            $action->action_code = $request->action_code;
            $action->save();

            $return = [ 'success' => true ];
        }
        return Response::json($return);
    }

    public function update(Request $request){
        $validator = Validator::make($request->all(), [
            'action_description' => 'required',
            'action_status' => 'required'
        ]);

        $return = [];
        if($validator->fails()){
            $return = [
                'success' => false,
                'errors' => $validator->getMessageBag()->toArray()
            ];
        }else{
            // edit action
            Sys_action::where('id', $request->id)
                ->update([
                    'action_description' => $request->action_description,
                    'action_name' => $request->action_name,
                    'class' =>  $request->class,
                    'route_id' =>  $request->route_id,
                    'user_mfid' =>  $request->user_mfid,
                    'action_status' => $request->action_status
                ]);

            $return = [ 'success' => true ];
        }
        return Response::json($return);
    }

    public function destroy(Request $request){
        if(Sys_action::destroy($request->ids)){
            $return = [ 'success' => true ];
        }else{
            $return = [ 'success' => false ];
        }
        return Response::json($return);
    }

    public function getAction(Request $request){
         $id = $request->id;
        $action = Sys_action::find($id);
        return Response::json($action);
    }

    public function getParent(Request $request){
        $route_id = $request->route_id;
        $parent_route = Sys_action::find($route_id);
        return Response::json($parent_route);
    }
}
