<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deceased_details', function (Blueprint $table) {
            $table->increments('deceased_id');
            $table->string('first_name');
            $table->string('street_address');
            $table->string('last_name');
            $table->string('id_number');
            $table->string('town_city');
            $table->string('province');
            $table->string('date_of_birth');
            $table->string('time_of_funeral');
            $table->string('date_of_death');
            $table->string('cemetery');
            $table->string('cause_of_death');
            $table->string('code');
            $table->string('date_of_funeral');
            $table->string('collected_from');
            $table->string('grave_no');
            $table->string('driver_car');
            $table->string('gender');
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
        Schema::dropIfExists('deceased_details');
    }
};
