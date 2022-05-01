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
        Schema::create('tvs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('tv_id');
            $table->string('name')->nullable();
            $table->text('overview')->nullable();
            $table->integer('popularity')->nullable();
            $table->integer('number_of_episodes')->nullable();
            $table->integer('number_of_seasons')->nullable();
            $table->integer('episode_run_time')->nullable();
            $table->dateTime('first_air_date')->nullable();
            $table->dateTime('last_air_date')->nullable();
            $table->string('backdrop_path')->nullable();
            $table->string('poster_path')->nullable();
            $table->string('status')->nullable();
            $table->string('tagline')->nullable();
            $table->string('type')->nullable();
            $table->integer('vote_count')->nullable();
            $table->decimal('vote_average', 3, 1)->nullable();
            $table->boolean('in_production')->nullable();

            $table->json('created_by')->nullable();
            $table->json('genres')->nullable();
            $table->json('last_episode_to_air')->nullable();
            $table->json('networks')->nullable();
            $table->json('production_companies')->nullable();
            $table->json('providers')->nullable();
            $table->json('seasons')->nullable();
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
        Schema::dropIfExists('tvs');
    }
};
