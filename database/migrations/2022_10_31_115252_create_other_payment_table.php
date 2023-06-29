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
        Schema::create('other_payment', function (Blueprint $table) {
            $table->increments('opayment_id');
            $table->string('id_number');
            $table->string('member');
            $table->string('easypay_no');
            $table->string('cover_date');
            $table->string('policy_status');
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
        Schema::dropIfExists('other_payment');
    }
};
