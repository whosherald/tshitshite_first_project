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
        Schema::create('mb_policy_dtl', function (Blueprint $table) {
            $table->increments('mbpolicy_id');
            $table->string('full_name');
            $table->string('last_name');
            $table->string('type');
            $table->string('initials');
            $table->string('premium');
            $table->string('cover');
            $table->string('relation');
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
        Schema::dropIfExists('mb_policy_dtl');
    }
};
