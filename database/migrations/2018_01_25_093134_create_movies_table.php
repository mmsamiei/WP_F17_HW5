<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('created_at');
            $table->string('title',255);
            $table->string('original_title',255);
            $table->tinyInteger('rate');
            $table->smallInteger('year');
            $table->string('length',255);
            $table->string('language',255);
            $table->string('country',255);
            $table->text('description');
            $table->string('director',255);
            $table->string('cover',255);
            $table->string('writer',255);
            $table->string('stars',255);
            $table->string('category',255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
