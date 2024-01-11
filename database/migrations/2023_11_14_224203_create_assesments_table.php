<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssesmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assesments', function (Blueprint $table) {
            $table->id();
            $table->string('session'); 
            $table->string('term');
            $table->string('year');
            $table->string('position');
            $table->string('nextTermBegins');
            $table->integer('attendance'); 
            $table->string('conduct');
            $table->string('promotedTo');
            $table->string('attitude');
            $table->string('interest'); 
            $table->float('sportAndGameFees');
            $table->float('PTAFees');
            $table->float('printingCost');
            $table->float('nextTermFees');
            $table->string('examinationNumber'); 
            $table->string('class');
            $table->string('IndexNumber');
            $table->string('assesmentNumber');
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
        Schema::dropIfExists('assesments');
    }
}
