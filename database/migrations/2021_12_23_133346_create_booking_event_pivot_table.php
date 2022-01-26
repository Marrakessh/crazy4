<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBookingEventPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_event', function (Blueprint $table) {
            $table->unsignedBigInteger('booking_id')->index();
            $table->foreign('booking_id')->references('id')->on('bookings')->onDelete('cascade');
            $table->unsignedBigInteger('event_id')->index();
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
            $table->primary(['booking_id', 'event_id']);

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
        Schema::dropIfExists('booking_event');
    }
}
