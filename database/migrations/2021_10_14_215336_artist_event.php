<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ArtistEvent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artist_event', function (Blueprint $table) {
            //$table->unsignedInteger('event_id');
            $table->foreignId('event_id')->references('id')->on('events')
                ->onUpdate('cascade')
                ->onDelete('cascade');

           // $table->unsignedInteger('artist_id');
            $table->foreignId('artist_id')->references('id')->on('artists')
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
        Schema::dropIfExists('artist_event');
    }
}
