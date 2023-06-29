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
        Schema::create('payment_method', function (Blueprint $table) {
            $table->increments('payment_id');
            $table->string('payment_type');
            $table->string('pay_cell_details');
            $table->string('pay_work_tell');
            $table->string('pay_home_tell');
            $table->string('pay_email');
            $table->string('pay_first_name');
            $table->string('pay_last_name');
            $table->string('pay_id_number');
            $table->string('pay_cell_number');
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
        Schema::dropIfExists('payment');
    }
};
