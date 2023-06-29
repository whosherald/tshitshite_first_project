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
        Schema::create('deceased_info', function (Blueprint $table) {
            $table->increments('deceased_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('id_number');
            $table->string('date_of_death');
            $table->string('date_of_funeral');
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
        Schema::dropIfExists('deceased_info');
    }
};
