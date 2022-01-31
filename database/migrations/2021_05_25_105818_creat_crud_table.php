<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatCrudTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crudTable', function (Blueprint $table) {
            /*
                added nullable(false) constraint so no col can be null
                added unique constraints so that each and every col have unique values
                added default constraint for std_id so that the default value for std_id is my sap id
            */ 
            $table->id();
            $table->string('std_id')->default('70070381')->unique()->nullable(false);
            $table->string('email')->unique()->nullable(false);
            $table->tinyInteger('semester')->unique()->nullable(false);
            $table->string('first_name')->unique()->nullable(false);
            $table->string('last_name')->unique()->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('crudTable');
    }
}
