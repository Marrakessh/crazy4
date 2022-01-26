<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistGenreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artist_genre', function (Blueprint $table) {

            // $table->unsignedInteger('artist_id');
            $table->foreignId('artist_id')->references('id')->on('artists')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

            //$table->unsignedInteger('event_id');
            $table->foreignId('genre_id')->references('id')->on('genres')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

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
        Schema::dropIfExists('artist_genre');
    }
}
