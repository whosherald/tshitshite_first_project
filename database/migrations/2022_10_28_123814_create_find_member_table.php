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
        Schema::create('admin_member', function (Blueprint $table) {
            $table->increments('member_id');
            $table->string('policy_number');
            $table->string('id_number');
            $table->string('member');
            $table->string('easypay_number');
            $table->string('cell_number');
            $table->string('member_branch');
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
        Schema::dropIfExists('member');
    }
};
