<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Venue::factory(10)->create();
        \App\Models\User::factory(1)->create();
        \App\Models\Artist::factory(10)->create();
        \App\Models\Event::factory(10)->create();
        \App\Models\Genre::factory(10)->create();

        \App\Models\ArtistEvent::factory(50)->create();
        \App\Models\ArtistGenre::factory(5)->create();

        \App\Models\Customer::factory(50)->create();
        //\App\Models\Vehicle::factory(50)->create();
        //\App\Models\Service::factory(50)->create();

    }
}
