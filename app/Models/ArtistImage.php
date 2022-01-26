<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtistImage extends Model
{
    use HasFactory;

    protected $table = 'artistimages';

    protected $fillable = [
        'artist_id','name', 'file_path', 'created_at', 'updated_at'
    ];

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }
}
