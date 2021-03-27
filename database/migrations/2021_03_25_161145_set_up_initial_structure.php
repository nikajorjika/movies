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
            $table->json('name')->nullable();
            $table->string('original_name');
            $table->string('flag');
            $table->timestamps();
        });

        Schema::create('genres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->json('name')->nullable();
            $table->timestamps();
        });

        Schema::create('titles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->json('name')->nullable();
            $table->json('other_names')->nullable();
            $table->string('original_name');
            $table->json('plot')->nullable();
            $table->enum('status', ['planned', 'ongoing', 'finished'])->default('ongoing');
            $table->timestamp('release_date');
            $table->timestamps();
        });

        Schema::create('episodes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->json('name')->nullable();
            $table->integer('episode_number');
            $table->enum('type', ['dubbed', 'subbed']);
            $table->foreignId('title_id')->constrained();
            $table->foreignId('language_id')->constrained();
            $table->timestamp('release_date');
            $table->timestamps();
        });
        
        Schema::create('genre_title', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('genre_id')->constrained();
            $table->foreignId('title_id')->constrained();
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
        Schema::drop('genre_title');
        Schema::drop('episodes');
        Schema::drop('titles');
        Schema::drop('genres');
        Schema::drop('languages');
    }
}
