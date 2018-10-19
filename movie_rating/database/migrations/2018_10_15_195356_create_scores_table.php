<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('movie_id');
            $table->integer('rating');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('movie_id')->references('id')->on('movies');
            $table->primary(['user_id', 'movie_id']);
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
        Schema::dropIfExists('scores');
    }
}
