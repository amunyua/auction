<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('item_id');
            $table->foreign('item_id')
                ->references('id')
                ->on('items')
                ->onUpdate('cascade');
            $table->integer('transaction_type_id');
            $table->foreign('transaction_type_id')
                ->references('id')
                ->on('transaction_types')
                ->onUpdate('cascade');
            $table->integer('transaction_category_id');
            $table->foreign('transaction_category_id')
                ->references('id')
                ->on('transaction_categories')
                ->onUpdate('cascade');
            $table->integer('warehouse_id');
            $table->foreign('warehouse_id')
                ->references('id')
                ->on('warehouses')
                ->onUpdate('cascade');
            $table->integer('quantity')->nullable();
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
        Schema::dropIfExists('stock_transactions');
    }
}
