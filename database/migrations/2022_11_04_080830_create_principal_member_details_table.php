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
        Schema::create('principal_member_details', function (Blueprint $table) {
            $table->increments('principalmem_dtl_id');
            $table->string('policy_number');
            $table->string('title');
            $table->string('id_number');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('initials');
            $table->string('gender');
            $table->string('age');
            $table->string('inception');
            $table->string('date_of_birth');
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
        Schema::dropIfExists('principal_member_details');
    }
};
