<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRevenueChannelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revenue_channels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('revenue_channel_name', 255);
            $table->string('revenue_channel_code', 50);
            $table->bigInteger('ifmis_headcode_id')->nullable();
            $table->bigInteger('ifmis_subcode_id')->nullable();
            $table->boolean('revenue_channel_status')->default('1');
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
        Schema::dropIfExists('revenue_channels');
    }
}
