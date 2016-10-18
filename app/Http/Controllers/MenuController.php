<?php

namespace App\Http\Controllers;

use App\Route;
use Illuminate\Http\Request;
use App\Menu;

use App\Http\Requests;
use Illuminate\Support\Facades\Response;

class MenuController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index(){
        $routes = Route::all();
        $menus = Menu::all();
        return view('system.menu', [
            'routes' => $routes,
            'menus' => $menus
        ]);
    }

    public function store(Request $request){
        $this->validate($request, [
            'route' => 'required',
            'menu_status' => 'required'
        ]);


        if(!empty($request->parent_menu)){
            $sequence = Menu::whereNull('parent_menu')->max('sequence');
        }else{
            $sequence = Menu::whereNotNull('parent_menu')->max('sequence');
        }
        $sequence = (empty($sequence)) ? 0 : $sequence;
        $next_seq = $sequence + 1;

        $menu = new Menu();
        $menu->route_id = $request->route;
        $menu->icon = $request->icon;
        $menu->menu_status = $request->menu_status;
        $menu->parent_menu = (empty($request->parent)) ? NULL : $request->parent;
        $menu->sequence = $next_seq;
        $menu->save();

        $request->session()->flash('status', 'Menu Item has been added');
        return redirect('/menu');
    }

    public function sideMenu($parent_id){
        $menus = (is_null($parent_id) || empty($parent_id)) ? Menu::whereNull('parent_menu')->orderBy('sequence', 'asc')->get() : Menu::where('parent_menu', $parent_id)->orderBy('sequence', 'asc')->get();

        if(count($menus)) {
            echo '<ol class="dd-list">';

            foreach ($menus as $item) {
                // show parent menu first
                $route_id = $item->route_id;
                $menu_name = Route::find($route_id)->route_name;

                echo '<li class="dd-item dd3-item" data-id="' . $item->id . '">';
                echo '<div class="dd-handle dd3-handle"> Drag</div>';

                echo '<div class="dd3-content">';
                echo '<i class="fa ' . $item->icon . '"></i> ' . $menu_name;

                echo '<div class="pull-right">
                    <div class="checkbox no-margin">
                        <label>
                            <input type="checkbox" class="checkbox style-0" value="' . $item->id . '">  
                            <span class="font-xs" menu-id="' . $item->id . '">
                            <a href="#edit-menu-item" class="edit-menu-link" data-toggle="modal" item-id="'.$item->id.'">
                                <i class="fa fa-edit"></i> Edit
                            </a></span>
                        </label>
                    </div>
                </div>';

                echo '</div>';

                $this->sideMenu($item->id);
                echo '</li>';
            }

            echo '</ol>';
        }
    }

    public function arrangeMenu(Request $request){
        $menu_data = $request->menu_params;
        $menu_array = json_decode($menu_data);

        $parent_sequence = 1;
        if(count($menu_array)){
            foreach ($menu_array as $array){
                $parent_id = $array->id;

                // update sequence for the parent menu item
                Menu::where('id', $parent_id)
                    ->update([
                        'sequence' => $parent_sequence,
                        'parent_menu' => NULL
                    ]);

                $child_sequence = 1;
                if(isset($array->children)) {
                    $children = $array->children;
                    foreach ($children as $child) {
                        $child_id = $child->id;

                        // update the sequence for the child menu item
                        Menu::where('id', $child_id)
                            ->update([
                                'sequence' => $child_sequence,
                                'parent_menu' => $parent_id
                            ]);

                        $child_sequence++;
                    }
                }

                $parent_sequence++;
            }
        }
        $request->session()->flash('status', 'Menu has been updated');
        return redirect('menu');
    }

    public function getMenu(Request $request){
        $menu = Menu::find($request->id);
        return Response::json($menu);
    }

    public function update(Request $request){
        $this->validate($request, [
            'route' => 'required',
            'menu_status' => 'required'
        ]);

        Menu::where('id', $request->edit_id)
            ->update([
                'route_id' => $request->route,
                'icon' => $request->icon,
                'menu_status' => $request->menu_status
            ]);

        $request->session()->flash('status', 'Menu Item has been updated');
        return redirect('/menu');
    }

    public function destroy(Request $request){
        if(Menu::destroy($request->ids)){
            return Response::json(['success' => true]);
        }else{
            return Response::json(['success' => false]);
        }
    }
}
