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
        Schema::create('debit_order', function (Blueprint $table) {
            $table->increments('debit_id');
            $table->string('debit_batch');
            $table->string('action_date');
            $table->string('batch_name');
            $table->string('volume');
            $table->string('amount');
            $table->string('unpaid_value');
            $table->string('unpaid_volumes');
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
        Schema::dropIfExists('debit_order');
    }
};
