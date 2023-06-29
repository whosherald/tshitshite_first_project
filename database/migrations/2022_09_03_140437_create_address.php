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
        Schema::create('address', function (Blueprint $table) {
            $table->increments('id');
            $table->string('res_residential_num');
            $table->string('mem_town_city');
            $table->string('res_suburb');
            $table->string('res_residential_code');
            $table->string('postal_pobox');
            $table->string('postal_residential_code');
            $table->string('postal_suburb');
            $table->string('postal_town');
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
        Schema::dropIfExists('address');
    }
};
