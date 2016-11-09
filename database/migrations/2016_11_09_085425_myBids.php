<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class MyBids extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement(
            'CREATE OR REPLACE VIEW public.mybids AS 
             SELECT ab.bid_id,
                ab.mf_id,
                a.item_id,
                i.item_name,
                ab.bid_price,
                ab.bid_date,
                ab.new_endtime
               FROM auction_bids ab
                 LEFT JOIN auctions a ON a.id = ab.auction_id
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
