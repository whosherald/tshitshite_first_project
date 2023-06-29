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
        Schema::create('policy_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('initials');
            $table->string('id_number');
            $table->string('product_type');
            $table->string('policy_status');
            $table->string('policy');
            $table->string('cover_date');
            $table->string('policy_inception_date');
            $table->string('type_of_income');
            $table->string('policy_agent');
            $table->string('policy_number');
            $table->string('policy_start_date');
            $table->string('premium');
            $table->string('easypay_number');
            $table->string('total_premium');
            $table->string('employmenttype');
            $table->string('branchname');
            $table->string('policy_underwritten_by');
            $table->string('membership_number');
            $table->string('policy_cover_date');
            $table->string('cover_amount');
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
        Schema::dropIfExists('policy_detail');
    }
};
