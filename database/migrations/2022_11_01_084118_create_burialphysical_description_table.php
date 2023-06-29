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
        Schema::create('burialphysical_description', function (Blueprint $table) {
            $table->increments('physical_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('deceased_idnumber');
            $table->string('date_of_application');
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
        Schema::dropIfExists('burialphysical_description');
    }
};
