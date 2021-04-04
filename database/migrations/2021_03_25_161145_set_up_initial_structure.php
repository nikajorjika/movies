<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SetUpInitialStructure extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('languages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('original_name');
            $table->string('flag');
            $table->timestamps();
        });

        Schema::create('genres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->timestamps();
        });

        Schema::create('movies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('slug');
            $table->json('other_names')->nullable();
            $table->string('original_name');
            $table->string('plot')->nullable();
            $table->enum('status', ['planned', 'ongoing', 'finished'])->default('ongoing');
            $table->timestamp('release_date');
            $table->timestamps();
        });

        Schema::create('episodes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->integer('episode_number');
            $table->enum('type', ['dubbed', 'subbed']);
            $table->foreignId('movie_id')->constrained();
            $table->foreignId('language_id')->constrained();
            $table->timestamp('release_date');
            $table->timestamps();
        });

        Schema::create('genre_movie', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('genre_id')->constrained();
            $table->foreignId('movie_id')->constrained();
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
        Schema::drop('genre_movie');
        Schema::drop('episodes');
        Schema::drop('movies');
        Schema::drop('genres');
        Schema::drop('languages');
    }
}
