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
        Schema::create('beneficiary_details', function (Blueprint $table) {
            $table->increments('ben_id');
            $table->string('ben_policy_number');
            $table->string('ben_tittle');
            $table->string('ben_first_name');
            $table->string('ben_last_name');
            $table->string('ben_gender');
            $table->string('ben_age');
            $table->string('ben_birth');
            $table->string('ben_initials');
            $table->string('ben_id_number');
            $table->string('ben_cell');
            $table->string('ben_work_tell');
            $table->string('ben_home_tell');
            $table->string('ben_email');
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
        Schema::dropIfExists('beneficiary_details');
    }
};
