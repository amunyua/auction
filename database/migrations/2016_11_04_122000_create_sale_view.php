<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaleView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sales_view', function (Blueprint $table) {
            \Illuminate\Support\Facades\DB::statement("
                CREATE OR REPLACE VIEW sales_view AS
                SELECT
                  s.*,
                  st.sale_type_name,
                  CONCAT(m.surname,' ',m.firstname,' ',m.middlename) AS customer_name,
                  it.item_name
                FROM sales s
                LEFT JOIN sales_types st ON s.sales_type_id = st.id
                LEFT JOIN masterfiles m ON s.customer_mf_id = m.id
                LEFT JOIN items it ON s.item_id = it.id
                            ");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sales_view', function (Blueprint $table) {
            //
        });
    }
}
