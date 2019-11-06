<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('year');
            $table->string('rated');
            $table->string('runtime');
            $table->string('genre');
            $table->string('director');
            $table->string('actors');
            $table->string('plot');
            $table->string('country');
            $table->string('poster');
            $table->string('imdbrating');
            $table->string('imdbid');
            $table->string('type');
            $table->string('ktid');
            $table->integer('count')->default(0);
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
        Schema::dropIfExists('movies');
    }
}
