<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->delete();

        #### Dashboard
        $route_dashboard = \App\Route::where('route_name', 'Dashboard')->first();
        $dashboard = new Menu();
        $dashboard->icon = 'icon-home';
        $dashboard->route_id = $route_dashboard->id;
        $dashboard->sequence = 1;
        $dashboard->save();

        $route_analytics = \App\Route::where('route_name', 'Analytics Dashboard')->first();
        $analytics = new Menu();
        $analytics->route_id = $route_analytics->id;
        $analytics->sequence = 1;
        $analytics->parent_menu = $dashboard->id;
        $analytics->save();

        #### Masterfile
        $route_masterfile = \App\Route::where('route_name', 'Masterfile')->first();
        $masterfile = new Menu();
        $masterfile->route_id = $route_masterfile->id;
        $masterfile->sequence = 2;
        $masterfile->icon = 'icon-group';
        $masterfile->save();

        $route_addmf = \App\Route::where('route_name', 'Add Masterfile')->first();
        $add_mf = new Menu();
        $add_mf->route_id = $route_addmf->id;
        $add_mf->sequence = 1;
        $add_mf->parent_menu = $masterfile->id;
        $add_mf->save();

        $route_allmfs = \App\Route::where('route_name', 'All Masterfiles')->first();
        $all_mfs = new Menu();
        $all_mfs->route_id = $route_allmfs->id;
        $all_mfs->sequence = 2;
        $all_mfs->parent_menu = $masterfile->id;
        $all_mfs->save();

        #### Auction
        $route_action = \App\Route::where('route_name', 'Auction Manager')->first();
        $auction = new Menu();
        $auction->route_id = $route_action->id;
        $auction->sequence = 3;
        $auction->icon = 'icon-list';
        $auction->save();

        $route_man_auctions = \App\Route::where('route_name', 'Manage Auctions')->first();
        $man_auctions = new Menu();
        $man_auctions->route_id = $route_man_auctions->id;
        $man_auctions->sequence = 1;
        $man_auctions->parent_menu = $auction->id;
        $man_auctions->save();

        $route_live_actions = \App\Route::where('route_name', 'Live Auctions')->first();
        $live_auctions = new Menu();
        $live_auctions->route_id = $route_live_actions->id;
        $live_auctions->sequence = 2;
        $live_auctions->parent_menu = $auction->id;
        $live_auctions->save();

        $route_ended_actions = \App\Route::where('route_name', 'Ended Auction Items')->first();
        $ended_actions = new Menu();
        $ended_actions->route_id = $route_ended_actions->id;
        $ended_actions->sequence = 3;
        $ended_actions->parent_menu = $auction->id;
        $ended_actions->save();

        $route_bid_packages = \App\Route::where('route_name', 'Bid Packages')->first();
        $bid_packages = new Menu();
        $bid_packages->route_id = $route_bid_packages->id;
        $bid_packages->parent_menu = $auction->id;
        $bid_packages->sequence = 4;
        $bid_packages->save();

        #### User Management
        $route_user_mgt = \App\Route::where('route_name', 'User Management')->first();
        $user_mgt = new Menu();
        $user_mgt->route_id = $route_user_mgt->id;
        $user_mgt->sequence = 4;
        $user_mgt->icon = 'icon-user';
        $user_mgt->save();

        $route_all_users = \App\Route::where('route_name', 'All Users')->first();
        $all_users = new Menu();
        $all_users->route_id = $route_all_users->id;
        $all_users->parent_menu = $user_mgt->id;
        $all_users->sequence = 1;
        $all_users->save();

        $route_roles = \App\Route::where('route_name', 'Roles')->first();
        $roles = new Menu();
        $roles->route_id = $route_roles->id;
        $roles->parent_menu = $user_mgt->id;
        $roles->sequence = 2;
        $roles->save();

        $route_roles = \App\Route::where('route_name', 'Audit Trail')->first();
        $roles = new Menu();
        $roles->route_id = $route_roles->id;
        $roles->parent_menu = $user_mgt->id;
        $roles->sequence = 3;
        $roles->save();

        $route_system = \App\Route::where('route_name', 'System Manager')->first();
        $system = new Menu();
        $system->route_id = $route_system->id;
        $system->sequence = 5;
        $system->icon = 'icon-cogs';
        $system->save();

        $route_routes = \App\Route::where('route_name', 'Routes')->first();
        $routes = new Menu();
        $routes->route_id = $route_routes->id;
        $routes->parent_menu = $system->id;
        $routes->sequence = 1;
        $routes->save();

        $route_menu = \App\Route::where('route_name', 'Menu')->first();
        $menu = new Menu();
        $menu->route_id = $route_menu->id;
        $menu->parent_menu = $system->id;
        $menu->sequence = 2;
        $menu->save();

        $route_menu = \App\Route::where('route_name', 'System Actions')->first();
        $menu = new Menu();
        $menu->route_id = $route_menu->id;
        $menu->parent_menu = $system->id;
        $menu->sequence = 3;
        $menu->save();
    }
}
