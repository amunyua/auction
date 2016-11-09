<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuctionBids extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auction_bids', function (Blueprint $table) {
            $table->increments('bid_id');
            $table->bigInteger('mf_id')
                ->foreign('mf_id')
                ->references('id')
                ->on('masterfiles')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->bigInteger('auction_id')
                ->foreign('auction_id')
                ->references('id')
                ->on('auctions')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->dateTime('bid_date');
            $table->dateTime('new_endtime');
            $table->double('bid_price');
            $table->timestamps();
        });
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
