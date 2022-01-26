<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'customer_id', 'vehicle_id','onhold'
    ];

    public function vehicle()
    {
        return $this->belongsTo('App\Models\Vehicle','vehicle_id');
    }
}
