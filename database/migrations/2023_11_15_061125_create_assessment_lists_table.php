<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssessmentListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assessment_lists', function (Blueprint $table) {
            $table->id();
            $table->string('subjectTitle'); 
            $table->integer('classScore');
            $table->integer('examScore');
            $table->integer('seventyPercent');
            $table->integer('Total'); 
            $table->string('position');
            $table->string('remark');
            $table->string('examinationNumber');
            $table->string('assesmentNumber');
            $table->string('IndexNumber');
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
        Schema::dropIfExists('assessment_lists');
    }
}
