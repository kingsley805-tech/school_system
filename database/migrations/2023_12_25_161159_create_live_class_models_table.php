<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLiveClassModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('live_class_models', function (Blueprint $table) {
            $table->id();
            $table->string('ClassID'); 
            $table->string('platform');
            $table->string('meetingLink');
            $table->string('meetingTopic');
            $table->string('meetingCode');
            $table->string('meetingPassword');
            $table->string('meetingTime');
            $table->string('meetingDate');
            $table->string('creator');
            $table->string('Email');
            $table->string('className');
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
        Schema::dropIfExists('live_class_models');
    }
}
