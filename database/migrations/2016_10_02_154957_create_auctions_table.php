<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuctionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auctions', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('item_id');
            $table->boolean('auto_rollover');
            $table->double('reserve_price');
            $table->double('bid_cost')->nullable();
            $table->integer('refresh_rate');
            $table->boolean('buy_now_option');
            $table->double('buy_now_price')->nullable();
            $table->date('start_date');
            $table->boolean('status');
            $table->bigInteger('win_mf_id')->nullable()
                ->foreign('win_mf_id')
                ->refrence('id')
                ->on('masterfile')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('auctions');
    }
}
