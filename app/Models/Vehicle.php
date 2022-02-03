<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'registrationNumber', 'brand','carModel','colour'
    ];


    public function customers()
    {
        return $this->belongsToMany(Customer::class, 'services', 'vehicle_id', 'customer_id')
            ->withPivot( 'onhold')
            ->withTimestamps();
    }

    public function service()
    {
        return $this->hasMany(Service::class);
    }
}
