<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up( )
    {
        Schema::dropIfExists('books');
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('author_id');
            $table->text('title');
            $table->text('description');
            $table->integer('amount');
            $table->string('isbn');
            $table->timestamps();

            $table->foreign('author_id')->references('id')->on('authors');

        });
        
    }
/*/id
autor-id
titulo
descrição
quantidade
isbn
created
modified*/
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
