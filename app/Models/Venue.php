<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Event;

class Venue extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'address1', 'address2', 'county', 'city', 'postcode', 'venue_phone', 'email', 'website', 'contact_name', 'capacity'
    ];


    public function event()
    {
        return $this->hasMany(Event::class);
    }

    public function venueimages()
    {
        return $this->hasMany(VenueImage::class, 'venue_id');
    }
}
