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
        Schema::create('claimant_details', function (Blueprint $table) {
            $table->increments('claimant_id');
            $table->string('title');
            $table->string('street');
            $table->string('last_name');
            $table->string('fist_name');
            $table->string('town_city');
            $table->string('province');
            $table->string('id_number');
            $table->string('code');
            $table->string('date_of_birth');

            $table->string('bank_name');
            $table->string('account_holder');
            $table->string('bank_branch');
            $table->string('account_number');
            $table->string('branch_code');
            $table->string('account_type');
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
        Schema::dropIfExists('claimant_details');
    }
};
