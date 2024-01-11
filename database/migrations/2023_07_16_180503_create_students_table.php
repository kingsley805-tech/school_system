<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('LastName');
            $table->string('StudentNumber');
            $table->string('FirstName');
            $table->string('StudentEmail')->nullable();
            $table->string('DateOFBirth');
            $table->string('StudentAddress');
            $table->string('Gender');
            $table->string('BloodGroup');
            $table->string('City');
            $table->string('State');
            $table->string('Country');
            $table->string('IdentityNumber')->unique();
            $table->string('ExtraNote');
            $table->string('AdmissionDate');
            $table->string('IndexNumber')->unique();
            $table->unsignedBigInteger('classroom_id');
            $table->foreign('classroom_id')->references('id')->on('classrooms');
            $table->unsignedBigInteger('myparent_id');
            $table->foreign('myparent_id')->references('id')->on('myparents');
            $table->string('StudentType');
            $table->string('routeID')->nullable();
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
        Schema::dropIfExists('students');
    }
}
