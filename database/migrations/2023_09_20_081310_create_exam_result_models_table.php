<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamResultModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_result_models', function (Blueprint $table) {
            $table->id();
            $table->string('studentName'); 
            $table->string('indexNumber');
            $table->string('class');
            $table->string('classroom_id');
            $table->string('subjectName');
            $table->string('subjectType');
            $table->integer('maximumMark');
            $table->string('paperCode');
            $table->integer('markObtained');
            $table->string('teacherRemark');
            $table->string('schoolRemark');
            $table->string('remark');
            $table->string('examSubjectID');
            $table->string('examinationNumber');
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
        Schema::dropIfExists('exam_result_models');
    }
}
