<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id')->references('id')->on('bookings')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('event_id')->references('id')->on('events')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->integer('tickets_full_price')->nullable();
            $table->integer('tickets_reduced_price')->nullable();

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
        Schema::dropIfExists('tickets');
    }
}
