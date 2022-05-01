<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('movie_id')->index();
            $table->string('imdb_id')->nullable();
            $table->string('title')->index();
            $table->text('overview')->nullable();
            $table->string('backdrop_path')->nullable();
            $table->string('poster_path')->nullable();
            $table->bigInteger('budget')->nullable();
            $table->bigInteger('revenue')->nullable();
            $table->dateTime('release_date')->nullable();
            $table->integer('runtime')->nullable();
            $table->string('status')->nullable();
            $table->string('tagline')->nullable();
            $table->decimal('vote_average', 3, 1)->nullable();
            $table->integer('vote_count')->nullable();
            $table->json('genres')->nullable();
            $table->json('production_companies')->nullable();
            $table->json('providers')->nullable();
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
};
