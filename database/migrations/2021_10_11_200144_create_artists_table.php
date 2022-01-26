<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artists', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('bio');
            $table->string('address1');
            $table->string('address2')->nullable();;
            $table->string('city');
            $table->string('county');
            $table->string('postcode');
            $table->string('phone');
            $table->string('email')->unique()->nullable();
            $table->string('website')->nullable();;
            $table->string('contact_name');
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
        Schema::dropIfExists('artists');
    }
}
