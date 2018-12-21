<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedPatientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //todo check the effects of ondelete('cascade')
    public function up()
    {
        Schema::create('med_patient', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('med_id');
            $table->foreign('med_id')->references('id')->on('meds')->ondelete('cascade');
            $table->unsignedInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('patients')->ondelete('cascade');
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
        Schema::dropIfExists('med_patient');
    }
}
