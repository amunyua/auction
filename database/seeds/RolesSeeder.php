<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sys_adm = new Role;
        $sys_adm->role_name = 'System Admin';
        $sys_adm->role_code = 'SYSTADMIN';
        $sys_adm->role_status = 1;
        $sys_adm->save();

        $admin = new Role();
        $admin->role_name = 'Administrator';
        $admin->role_code = 'ADMINISTRATOR';
        $admin->role_status = 1;
        $admin->save();

        $staff = new Role();
        $staff->role_name = 'Staff';
        $staff->role_code = 'STAFF';
        $staff->role_status = 1;
        $staff->save();

        $client = new Role();
        $client->role_name = 'Client';
        $client->role_code = 'CLIENT';
        $client->role_status = 1;
        $client->save();
    }
}
