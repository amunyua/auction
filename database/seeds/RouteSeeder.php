<?php

use Illuminate\Database\Seeder;
use App\Route;
use App\Role;
use Illuminate\Support\Facades\DB;

class RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('routes')->delete();

        $admin = Role::where('role_code', 'SYS_ADMIN')->first();
        #### Dashboard
        $dashboard = new Route();
        $dashboard->route_name = 'Dashboard';
        $dashboard->save();
        $dashboard_id = $dashboard->id;

        $analytics = new Route();
        $analytics->route_name = 'Analytics Dashboard';
        $analytics->url = 'dashboard';
        $analytics->parent_route = $dashboard_id;
        $analytics->save();
        $analytics->roles()->attach($admin);

        #### Masterfile
        $mf = new Route();
        $mf->route_name = 'Masterfile';
        $mf->save();
        $mf_id = $mf->id;

        $add_mf = new Route();
        $add_mf->route_name = 'Add Masterfile';
        $add_mf->url = 'masterfile';
        $add_mf->parent_route = $mf_id;
        $add_mf->save();
        $add_mf->roles()->attach($admin);

        $all_mf = new Route();
        $all_mf->route_name = 'All Masterfiles';
        $all_mf->url = 'all_mfs';
        $all_mf->parent_route = $mf_id;
        $all_mf->save();
        $all_mf->roles()->attach($admin);

        #### Inventory
        $inventory = new Route();
        $inventory->route_name = 'Inventory';
        $inventory->save();
        $inventory_id = $inventory->id;

        #### Auction Manager
        $auction_manager = new Route();
        $auction_manager->route_name = 'Auction Manager';
        $auction_manager->save();
        $am_id = $auction_manager->id;

        $man_auctions = new Route();
        $man_auctions->route_name = 'Manage Auctions';
        $man_auctions->url = 'auction-items';
        $man_auctions->parent_route = $am_id;
        $man_auctions->save();
        $man_auctions->roles()->attach($admin);

        $live_actions = new Route();
        $live_actions->route_name = 'Live Auctions';
        $live_actions->url = 'live-auction-items';
        $live_actions->parent_route = $am_id;
        $live_actions->save();
        $live_actions->roles()->attach($admin);

        $ended_actions = new Route();
        $ended_actions->route_name = 'Ended Auction Items';
        $ended_actions->url = 'live-auction-items';
        $ended_actions->parent_route = $am_id;
        $ended_actions->save();
        $ended_actions->roles()->attach($admin);

        $bid_packages = new Route();
        $bid_packages->route_name = 'Bid Packages';
        $bid_packages->url = 'bid-packages';
        $bid_packages->parent_route = $am_id;
        $bid_packages->save();
        $bid_packages->roles()->attach($admin);

        #### Sales
        $sales = new Route();
        $sales->route_name = 'Sales';
        $sales->save();
        $sales_id = $sales->id;

        $buy_now_purchases = new Route();
        $buy_now_purchases->route_name = 'Buy Now Purchases';
        $buy_now_purchases->url = 'buy-now-purchases';
        $buy_now_purchases->parent_route = $sales_id;
        $buy_now_purchases->save();
        $buy_now_purchases->roles()->attach($admin);

        $bid_purchases = new Route();
        $bid_purchases->route_name = 'Bid Purchases';
        $bid_purchases->url = 'bid-purchases';
        $bid_purchases->parent_route = $sales_id;
        $bid_purchases->save();
        $bid_purchases->roles()->attach($admin);

        $online_purchases = new Route();
        $online_purchases->route_name = 'Online Purchases';
        $online_purchases->url = 'online-purchases';
        $online_purchases->parent_route = $sales_id;
        $online_purchases->save();
        $online_purchases->roles()->attach($admin);

        #### User Management
        $user_management = new Route();
        $user_management->route_name = 'User Management';
        $user_management->save();
        $user_mgt_id = $user_management->id;

        $all_users = new Route();
        $all_users->route_name = 'All Users';
        $all_users->url = 'all-users';
        $all_users->parent_route = $user_mgt_id;
        $all_users->save();
        $all_users->roles()->attach($admin);

        $roles = new Route();
        $roles->route_name = 'Roles';
        $roles->url = 'user-roles';
        $roles->parent_route = $user_mgt_id;
        $roles->save();
        $roles->roles()->attach($admin);

        $audit_trail = new Route();
        $audit_trail->route_name = 'Audit Trail';
        $audit_trail->url = 'audit_trails';
        $audit_trail->parent_route = $user_mgt_id;
        $audit_trail->save();
        $audit_trail->roles()->attach($admin);

        #### System Manager
        $system_manager = new Route();
        $system_manager->route_name = 'System Manager';
        $system_manager->save();
        $sys_id = $system_manager->id;

        $routes = new Route();
        $routes->route_name = 'Routes';
        $routes->url = 'routes';
        $routes->parent_route = $user_mgt_id;
        $routes->save();
        $routes->roles()->attach($admin);

        $menu = new Route();
        $menu->route_name = 'Menu';
        $menu->url = 'menu';
        $menu->parent_route = $user_mgt_id;
        $menu->save();
        $menu->roles()->attach($admin);

        $menu = new Route();
        $menu->route_name = 'System Actions';
        $menu->url = 'sys-actions';
        $menu->parent_route = $user_mgt_id;
        $menu->save();
        $menu->roles()->attach($admin);
    }
}