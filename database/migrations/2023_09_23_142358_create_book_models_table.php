<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_models', function (Blueprint $table) {
            $table->id();
            $table->string('title'); 
            $table->string('author');
            $table->string('subject');
            $table->string('rackNumber');
            $table->integer('price');
            $table->integer('quantity');
            $table->integer('available');
            $table->integer('issued');
            $table->string('isbnNumber');
            $table->string('description');
            $table->string('bookID');
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
        Schema::dropIfExists('book_models');
    }
}
