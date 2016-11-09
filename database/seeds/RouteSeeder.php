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

        $del_mfs = new Route();
        $del_mfs->route_name = 'Deleted Masterfiles';
        $del_mfs->url = 'deleted_mfs';
        $del_mfs->parent_route = $mf_id;
        $del_mfs->save();
        $del_mfs->roles()->attach($admin);

        #### Inventory
        $inventory = new Route();
        $inventory->route_name = 'Inventory';
        $inventory->save();
        $inventory_id = $inventory->id;

        $inventory_cats = new Route();
        $inventory_cats->route_name = 'Manage Categories';
        $inventory_cats->url = 'categories';
        $inventory_cats->parent_route = $inventory_id;
        $inventory_cats->route_status = '1';
        $inventory_cats->save();
        $inventory_cats->roles()->attach($admin);

        $subcategories = new Route();
        $subcategories-> route_name = 'Manage Subcategories';
        $subcategories->url = 'sub-categories';
        $subcategories->parent_route = $inventory_id;
        $subcategories->route_status = '1';
        $subcategories->save();
        $subcategories->roles()->attach($admin);

        $warehouses = new Route();
        $warehouses-> route_name = 'Manage Warehouses';
        $warehouses->url = 'warehouses';
        $warehouses->parent_route = $inventory_id;
        $warehouses->route_status = '1';
        $warehouses->save();
        $warehouses->roles()->attach($admin);

        $inventory_items = new Route();
        $inventory_items->route_name = 'All Inventory Items';
        $inventory_items->url = 'all-items';
        $inventory_items->route_status = '1';
        $inventory_items->parent_route = $inventory_id;
        $inventory_items->save();
        $inventory_items->roles()->attach($admin);

        $stock_transactions = new Route();
        $stock_transactions->route_name = 'Stock Transactions';
        $stock_transactions->url = 'stock-transactions';
        $stock_transactions->parent_route = $inventory_id;
        $stock_transactions->save();
        $stock_transactions->roles()->attach($admin);

        $create_inv = new Route();
        $create_inv->route_name = 'Create Inventory Item';
        $create_inv->url = 'add-item';
        $create_inv->parent_route = $inventory_id;
        $create_inv->route_status = '1';
        $create_inv->save();
        $create_inv->roles()->attach($admin);






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

        $auction_manager = new Route();
        $auction_manager->route_name = 'Get Auction Item Data';
        $auction_manager->url = 'auction-item-data/{id}';
        $auction_manager->parent_route = $am_id;
        $auction_manager->save();
        $auction_manager->roles()->attach($admin);

        $auction_manager = new Route();
        $auction_manager->route_name = 'Add Auction Item';
        $auction_manager->url = 'add-auction-item';
        $auction_manager->parent_route = $am_id;
        $auction_manager->save();
        $auction_manager->roles()->attach($admin);

        $auction_manager = new Route();
        $auction_manager->route_name = 'Update Auction Item';
        $auction_manager->url = 'edit-auction-item';
        $auction_manager->parent_route = $am_id;
        $auction_manager->save();
        $auction_manager->roles()->attach($admin);

        $auction_manager = new Route();
        $auction_manager->route_name = 'Delete Auction Item';
        $auction_manager->url = 'delete-auction-item';
        $auction_manager->parent_route = $am_id;
        $auction_manager->save();
        $auction_manager->roles()->attach($admin);

        $auction_manager = new Route();
        $auction_manager->route_name = 'Add Bid Package';
        $auction_manager->url = 'add-bid-package';
        $auction_manager->parent_route = $am_id;
        $auction_manager->save();
        $auction_manager->roles()->attach($admin);

        $auction_manager = new Route();
        $auction_manager->route_name = 'Update Bid Package';
        $auction_manager->url = 'update-bid-package';
        $auction_manager->parent_route = $am_id;
        $auction_manager->save();
        $auction_manager->roles()->attach($admin);

        $auction_manager = new Route();
        $auction_manager->route_name = 'Delete Bid Package';
        $auction_manager->url = 'delete-bid-package';
        $auction_manager->parent_route = $am_id;
        $auction_manager->save();
        $auction_manager->roles()->attach($admin);

        $auction_manager = new Route();
        $auction_manager->route_name = 'Get Bid Package Data';
        $auction_manager->url = 'bid-package-data/{id}';
        $auction_manager->parent_route = $am_id;
        $auction_manager->save();
        $auction_manager->roles()->attach($admin);

        $live_actions = new Route();
        $live_actions->route_name = 'Live Auctions';
        $live_actions->url = 'live-auction-items';
        $live_actions->parent_route = $am_id;
        $live_actions->save();
        $live_actions->roles()->attach($admin);

        $ended_actions = new Route();
        $ended_actions->route_name = 'Ended Auction Items';
        $ended_actions->url = 'ended-auction-items';
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

        $online_purchases = new Route();
        $online_purchases->route_name = 'Orders';
        $online_purchases->url = 'orders';
        $online_purchases->parent_route = $sales_id;
        $online_purchases->save();
        $online_purchases->roles()->attach($admin);

        $online_purchases = new Route();
        $online_purchases->route_name = 'Load Orders';
        $online_purchases->url = 'load-orders';
        $online_purchases->parent_route = $sales_id;
        $online_purchases->save();
        $online_purchases->roles()->attach($admin);

        $online_purchases = new Route();
        $online_purchases->route_name = 'Load Order Items';
        $online_purchases->url = 'load-order-items/{id}     ';
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

        $all_users = new Route();
        $all_users->route_name = 'Load all Users';
        $all_users->url = 'load-users';
        $all_users->parent_route = $user_mgt_id;
        $all_users->save();
        $all_users->roles()->attach($admin);

        $all_users = new Route();
        $all_users->route_name = 'Reset User Password';
        $all_users->url = 'reset-pass';
        $all_users->parent_route = $user_mgt_id;
        $all_users->save();
        $all_users->roles()->attach($admin);

        $all_users = new Route();
        $all_users->route_name = 'Delete User Account';
        $all_users->url = 'delete-user';
        $all_users->parent_route = $user_mgt_id;
        $all_users->save();
        $all_users->roles()->attach($admin);

        $all_users = new Route();
        $all_users->route_name = 'Get User data records';
        $all_users->url = 'user-data/{id}';
        $all_users->parent_route = $user_mgt_id;
        $all_users->save();
        $all_users->roles()->attach($admin);

        $all_users = new Route();
        $all_users->route_name = 'Deactivate User Account';
        $all_users->url = 'block-user';
        $all_users->parent_route = $user_mgt_id;
        $all_users->save();
        $all_users->roles()->attach($admin);

        $all_users = new Route();
        $all_users->route_name = 'Activate User Account';
        $all_users->url = 'unblock-user';
        $all_users->parent_route = $user_mgt_id;
        $all_users->save();
        $all_users->roles()->attach($admin);

        $all_users = new Route();
        $all_users->route_name = 'User Account Profile';
        $all_users->url = 'user_profile/{id}';
        $all_users->parent_route = $user_mgt_id;
        $all_users->save();
        $all_users->roles()->attach($admin);

        $all_users = new Route();
        $all_users->route_name = 'User Account Audit Trail';
        $all_users->url = 'user_profile/user-audit/{id}';
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

        $audit_trail = new Route();
        $audit_trail->route_name = 'Get Audit Trail';
        $audit_trail->url = 'load-audit';
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
        $routes->parent_route = $sys_id;
        $routes->save();
        $routes->roles()->attach($admin);

        $route = new Route();
        $route->route_name = 'Load Routes';
        $route->url = 'load-routes';
        $route->parent_route = $sys_id;
        $route->save();
        $route->roles()->attach($admin);

        $route = new Route();
        $route->route_name = 'Add Route';
        $route->url = 'add-route';
        $route->parent_route = $sys_id;
        $route->save();
        $route->roles()->attach($admin);

        $route = new Route();
        $route->route_name = 'Get System Routes';
        $route->url = 'get-routes';
        $route->parent_route = $sys_id;
        $route->save();
        $route->roles()->attach($admin);

        $route = new Route();
        $route->route_name = 'Get Route';
        $route->url = 'get-route/{id}';
        $route->parent_route = $sys_id;
        $route->save();
        $route->roles()->attach($admin);

        $route = new Route();
        $route->route_name = 'Update System Route';
        $route->url = 'update-route';
        $route->parent_route = $sys_id;
        $route->save();
        $route->roles()->attach($admin);

        $route = new Route();
        $route->route_name = 'Delete System Route';
        $route->url = 'delete-route';
        $route->parent_route = $sys_id;
        $route->save();
        $route->roles()->attach($admin);

        $route = new Route();
        $route->route_name = 'Load Routes';
        $route->url = 'load-routes';
        $route->parent_route = $sys_id;
        $route->save();
        $route->roles()->attach($admin);

        $menu = new Route();
        $menu->route_name = 'Menu';
        $menu->url = 'menu';
        $menu->parent_route = $sys_id;
        $menu->save();
        $menu->roles()->attach($admin);

        $menu = new Route();
        $menu->route_name = 'Add Menu Item';
        $menu->url = 'add-menu';
        $menu->parent_route = $sys_id;
        $menu->save();
        $menu->roles()->attach($admin);

        $menu = new Route();
        $menu->route_name = 'Arrange Menu';
        $menu->url = 'arrange-menu';
        $menu->parent_route = $sys_id;
        $menu->save();
        $menu->roles()->attach($admin);

        $menu = new Route();
        $menu->route_name = 'Get Menu Item';
        $menu->url = 'get-menu/{id}';
        $menu->parent_route = $sys_id;
        $menu->save();
        $menu->roles()->attach($admin);

        $menu = new Route();
        $menu->route_name = 'Edit Menu Item';
        $menu->url = 'edit-menu';
        $menu->parent_route = $sys_id;
        $menu->save();
        $menu->roles()->attach($admin);

        $menu = new Route();
        $menu->route_name = 'Delete Menu Item';
        $menu->url = 'delete-menu';
        $menu->parent_route = $sys_id;
        $menu->save();
        $menu->roles()->attach($admin);

        $menu = new Route();
        $menu->route_name = 'System Actions';
        $menu->url = 'sys-actions';
        $menu->parent_route = $sys_id;
        $menu->save();
        $menu->roles()->attach($admin);

        $menu = new Route();
        $menu->route_name = 'Load System Actions';
        $menu->url = 'load-action';
        $menu->parent_route = $sys_id;
        $menu->save();
        $menu->roles()->attach($admin);

        $menu = new Route();
        $menu->route_name = 'Add System Actions';
        $menu->url = 'add-action';
        $menu->parent_route = $sys_id;
        $menu->save();
        $menu->roles()->attach($admin);

        $menu = new Route();
        $menu->route_name = 'Update System Actions';
        $menu->url = 'update-action';
        $menu->parent_route = $sys_id;
        $menu->save();
        $menu->roles()->attach($admin);

        $menu = new Route();
        $menu->route_name = 'Delete System Actions';
        $menu->url = 'delete-action';
        $menu->parent_route = $sys_id;
        $menu->save();
        $menu->roles()->attach($admin);

        $menu = new Route();
        $menu->route_name = 'Get Child Routes';
        $menu->url = 'get-child-routes';
        $menu->parent_route = $sys_id;
        $menu->save();
        $menu->roles()->attach($admin);

        $menu = new Route();
        $menu->route_name = 'Get Actions';
        $menu->url = 'get-action/{id}';
        $menu->parent_route = $sys_id;
        $menu->save();
        $menu->roles()->attach($admin);

        #### Sales
        $auction_sales = new Route();
        $auction_sales->route_name = 'Sales';
        $auction_sales->save();

        $bid_sales = new Route();
        $bid_sales->route_name = 'Bid Sales';
        $bid_sales->url = 'bid-sales';
        $bid_sales->parent_route = $auction_sales->id;
        $bid_sales->save();
        $bid_sales->roles()->attach($admin);

        $buy_now = new Route();
        $buy_now->route_name = 'Buy Now Purchases';
        $buy_now->url = 'bid-sales';
        $buy_now->parent_route = $auction_sales->id;
        $buy_now->save();
        $buy_now->roles()->attach($admin);

        $buy_now = new Route();
        $buy_now->route_name = 'Ordinary Purchases';
        $buy_now->url = 'ordinary-purchases';
        $buy_now->parent_route = $auction_sales->id;
        $buy_now->save();
        $buy_now->roles()->attach($admin);

        $buy_now = new Route();
        $buy_now->route_name = 'Auction Purchases';
        $buy_now->url = 'auction-purchases';
        $buy_now->parent_route = $auction_sales->id;
        $buy_now->save();
        $buy_now->roles()->attach($admin);
    }
}