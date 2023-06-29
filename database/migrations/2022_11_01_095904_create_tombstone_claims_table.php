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
        Schema::create('tombstone_claims', function (Blueprint $table) {
            $table->increments('tombstone_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('tel_number');
            $table->string('deceased_id_no');
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
        Schema::dropIfExists('tombstone_claims');
    }
};
