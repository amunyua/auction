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
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('transaction_type');
            $table->foreign('transaction_type')
                ->references('id')
                ->on('transaction_types')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('transaction_category');
            $table->foreign('transaction_category')
                ->references('id')
                ->on('transaction_categories')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('warehouse');
            $table->foreign('warehouse')
                ->references('id')
                ->on('warehouses')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('quantity');
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
