<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Customer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username','title','firstname', 'lastname', 'address1', 'address2', 'towncity', 'county', 'postcode', 'phone', 'email'
    ];

    public function vehicles()
    {
        return $this->belongsToMany(Vehicle::class, 'services', 'customer_id', 'vehicle_id')
            ->withPivot( 'onhold')
            ->withTimestamps();
    }

//    public function booking()
//    {
//        return $this->hasMany(Booking::class);
//    }
}
