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
        Schema::create('group_payment', function (Blueprint $table) {
            $table->increments('gpayment_id');
            $table->string('modified_user');
            $table->string('modified_date');
            $table->string('policy_number');
            $table->string('cover_date');
            // $table->string('policy_status');
            $table->string('group_name');
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
        Schema::dropIfExists('group_payment');
    }
};
