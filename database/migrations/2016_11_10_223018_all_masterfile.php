<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AllMasterfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement(
            "CREATE OR REPLACE VIEW public.all_masterfile AS 
             SELECT masterfiles.id,
                masterfiles.id_passport,
                masterfiles.gender,
                masterfiles.reg_date,
                masterfiles.b_role,
                masterfiles.user_role,
                masterfiles.email,
                masterfiles.customer_type_name,
                concat(masterfiles.surname, ' ', masterfiles.firstname, ' ', masterfiles.middlename) AS full_name
               FROM masterfiles
              WHERE masterfiles.b_role::text = 'Staff'::text "
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
