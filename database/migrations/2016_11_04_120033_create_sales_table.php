<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('sales_type_id');
            $table->foreign('sales_type_id')
                ->references('id')
                ->on('sales_types')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamp('sales_date');
            $table->bigInteger('customer_mf_id');
            $table->foreign('customer_mf_id')
                ->references('id')
                ->on('masterfiles')
                ->onUpdate('cascade')
                ->onDeletet('cascade');
            $table->bigInteger('transaction_id');
            $table->foreign('transaction_id')
                ->references('transaction_id')
                ->on('transactions')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->bigInteger('item_id');
            $table->foreign('item_id')
                ->references('id')
                ->on('items')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('sales');
    }
}
