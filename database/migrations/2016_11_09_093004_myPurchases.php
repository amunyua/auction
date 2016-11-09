<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MyPurchases extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement(
            'CREATE OR REPLACE VIEW public.mypurchases AS 
             SELECT a.id,
                i.item_name,
                a.buy_now_price,
                a.end_date,
                a.status,
                a.win_mf_id
            FROM auctions a
            LEFT JOIN items i ON i.id = a.item_id'
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
