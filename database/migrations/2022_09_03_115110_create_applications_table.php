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
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('tbl_id');
            $table->integer('user_id');
            $table->string('capturedby');
            $table->string('brokername');
            $table->string('brokercode');
            $table->string('brokertel');
            $table->string('brokermail');
            $table->string('status');
            $table->string('refrence_id');
            $table->string('memebership_num');
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
        Schema::dropIfExists('applications');
    }
};
