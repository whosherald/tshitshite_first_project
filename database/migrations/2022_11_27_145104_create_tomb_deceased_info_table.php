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
        Schema::create('tomb_deceased_info', function (Blueprint $table) {
            $table->increments('tomb_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('id_number');
            $table->string('cementry');
            $table->string('grave_no');
            $table->string('date_of_memorial');
            $table->string('deceased');
            $table->string('erect');
            $table->string('contact_person');
            $table->string('contact_no');
            $table->string('notes');
            $table->string('select_tombstone');
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
        Schema::dropIfExists('tomb_deceased_info');
    }
};
