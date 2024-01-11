<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddexamSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addexam_subjects', function (Blueprint $table) {
            $table->id();
            $table->string('subjectName'); 
            $table->string('subjectType');
            $table->string('maximumMark');
            $table->string('paperCode');
            $table->string('paperDate');
            $table->string('startTime');
            $table->string('endTime');
            $table->string('roomNumber');
            $table->string('examinationNumber');
            $table->string('examSubjectID');
            $table->string('Session');
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
        Schema::dropIfExists('addexam_subjects');
    }
}
