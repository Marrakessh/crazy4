<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'bio', 'address1', 'address2', 'city', 'county', 'postcode', 'phone', 'email', 'website', 'contact_name'
    ];


    public function events()
    {
        return $this->belongsToMany(Event::class)->withTimestamps();
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class)->withTimestamps();
    }

    public function artistimages()
    {
        return $this->hasMany(ArtistImage::class, 'artist_id');
    }

}
