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
            $table->string('imdb_id')->index();
            $table->string('title')->index();
            $table->text('overview');
            $table->string('backdrop_path');
            $table->string('poster_path');
            $table->bigInteger('budget');
            $table->bigInteger('revenue');
            $table->dateTime('release_date');
            $table->integer('runtime');
            $table->string('status');
            $table->string('tagline');
            $table->decimal('vote_average', 2, 1);
            $table->integer('vote_count');
            $table->json('genres');
            $table->json('production_companies');
            $table->json('providers');
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
