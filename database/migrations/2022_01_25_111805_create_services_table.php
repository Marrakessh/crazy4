<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
           $table->foreignId('customer_id')->constrained()
               ->onUpdate('cascade')
               ->onDelete('cascade');
            $table->foreignId('vehicle_id');
//                ->references('id')->on('vehicles')->constrained()
//               ->onUpdate('cascade')
//              ->onDelete('cascade');
            $table->boolean('onhold');
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
        Schema::dropIfExists('services');
    }
}
