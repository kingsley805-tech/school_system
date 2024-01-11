<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendanceModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendance_models', function (Blueprint $table) {
            $table->id();
            $table->string('student'); 
            $table->string('IndexNumber');
            $table->string('className');
            $table->integer('valNumber');
            $table->string('classID');
            $table->string('Month');
            $table->string('stringDate');
            $table->string('WeeK');
            $table->string('Day');
            $table->string('session');
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
        Schema::dropIfExists('attendance_models');
    }
}
