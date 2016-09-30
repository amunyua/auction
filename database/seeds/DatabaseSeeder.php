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
    }
}
