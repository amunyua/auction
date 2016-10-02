<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('item_name',255);
            $table->string('item_code',255);
            $table->integer('item_category');
            $table->foreign('item_categoty')
                ->references('id')
                ->on('categories')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('item_sub_category');
            $table->foreign('item_sub_category')
                ->references('id')
                ->on('subcategories')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('supplier_mfid');
            $table->foreign('supplier_mfid')
                ->references('id')
                ->on('masterfiles')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('image_path',250);
            $table->double('purchase_price');
            $table->integer('initial_stock');
            $table->integer('warehouse');
            $table->foreign('warehouse')
                ->references('id')
                ->on('warehouses')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('stock_reorder_level');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('items', function (Blueprint $table) {
            //
        });
    }
}
