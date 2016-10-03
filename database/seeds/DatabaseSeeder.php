<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(CustomerTypesSeeder::class);
         $this->call(MasterfileSeeder::class);
         $this->call(UserLoginSeeder::class);
         $this->call(RequestTypesSeeder::class);
         $this->call(transaction_categories_seeder::class);
         $this->call(transaction_types_seeder::class);
         $this->call(UserRolesSeeder::class);
         $this->call(AddressTypeSeeder::class);
         $this->call(CountySeeder::class);
    }
}
