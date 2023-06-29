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
        Schema::create('claims_details', function (Blueprint $table) {
            $table->increments('claims_id');
            $table->string('claiming_for_member');
            $table->string('apply_waiting_period');
            $table->string('claim_date');
            $table->string('claim_number');
            $table->string('cause_of_death');
            $table->string('cover_amount');
            $table->string('claim_notes');
            $table->string('claim_member');
            $table->string('waiting_period');
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
        Schema::dropIfExists('claims_details');
    }
};
