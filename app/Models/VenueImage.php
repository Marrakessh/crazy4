<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VenueImage extends Model
{
    use HasFactory;

    protected $table = 'venueimages';

    protected $fillable = [
        'venue_id','name', 'file_path', 'created_at', 'updated_at'
    ];

    public function venue()
    {
        return $this->belongsTo(Venue::class);
    }
}
