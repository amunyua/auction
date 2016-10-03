<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masterfiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('surname', 255);
            $table->string('firstname', 255);
            $table->string('middlename', 255)->nullable();
            $table->string('id_passport', 255);
            $table->string('gender', 50);
            $table->text('image_path')->nullable();
            $table->date('reg_date');
            $table->string('b_role', 50);
            $table->string('user_role');
            $table->string('email', 255);
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
        Schema::dropIfExists('masterfiles');
    }
}
