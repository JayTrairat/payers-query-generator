<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaxsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taxs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('code_name');

            $table->string('flag_building');
            $table->string('flag_billboard');
            $table->string('flag_land');
            $table->string('flag_two_houses');

            $table->string('total_building');
            $table->string('no_building_1'); // บ้านเช่า
            $table->string('no_building_2'); // ญาติอาศัย
            $table->string('no_building_3'); // ประกอบการค้า

            $table->string('total_billboard');
            $table->string('no_billboard');

            $table->string('total_land');
            $table->string('no_land');

            $table->string('address_no');
            $table->string('address_moo');
            $table->string('address_road');
            $table->string('address_tambon');
            $table->string('address_amphur');
            $table->string('address_province');
            $table->string('address_post_code');
            $table->string('telephone_no');
            $table->string('behind_payment');

            $table->string('total');
            $table->string('note');

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
        Schema::dropIfExists('taxs');
    }
}
