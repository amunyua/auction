<?php

use Illuminate\Database\Seeder;
use App\Masterfile;
use App\CustomerType;

class MasterfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ct = CustomerType::where('customer_type_code', 'INDIVIDUAL')->first();

        $admin = new Masterfile();
        $admin->surname = 'Admin';
        $admin->firstname = 'Admin';
        $admin->id_passport = '123456';
        $admin->gender = 'Male';
        $admin->reg_date = date('Y-m-d');
        $admin->b_role = 'Staff';
        $admin->customer_type_id = $ct->id;
        $admin->email = 'admin@admin.com';
        $admin->phone = 070000000;

        $admin->save();

    }
}
