<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Movie', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps('created_at');
            $table->string('title',255);
            $table->string('original_title',255);
            $table->tinyInteger('rate');
            $table->smallInteger('year');
            $table->string('length',255);
            $table->string('language',255);
            $table->string('country',255);
            $table->text('description');
            $table->string('director',255);





        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Movie');
    }
}
