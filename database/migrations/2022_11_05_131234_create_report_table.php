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
        Schema::create('report', function (Blueprint $table) {
            $table->increments('report_id');
            $table->string('report_type');
            $table->string('report');
            $table->string('date_from');
            $table->string('date_to');
            $table->string('branch_name');
            $table->string('group');
            $table->string('agent');
            $table->string('initial');
            $table->string('payment_type');
            $table->string('policy_status');
            $table->string('report_export_type');
            $table->string('send_email');
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
        Schema::dropIfExists('report');
    }
};
