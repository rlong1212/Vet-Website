<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('animalID')->unsigned()->index();
            $table->integer('keeperID')->unsigned()->index();
            $table->integer('consultantID')->unsigned()->index();
            $table->string('appointmentType');
            $table->integer('time');
            $table->string('date'); 
            $table->rememberToken();
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
        Schema::dropIfExists('appointmentHistory');
    }
}
