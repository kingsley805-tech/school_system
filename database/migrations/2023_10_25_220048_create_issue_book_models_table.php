<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIssueBookModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issue_book_models', function (Blueprint $table) {
            $table->id();
            $table->string('title'); 
            $table->string('author');
            $table->string('student');
            $table->string('IndexNumber'); 
            $table->string('className');
            $table->string('class');
            $table->string('status');
            $table->integer('quantity');
            $table->string('returnDate'); 
            $table->string('dateIssued');
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
        Schema::dropIfExists('issue_book_models');
    }
}
