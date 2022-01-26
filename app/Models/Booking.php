<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Event;
use Illuminate\Http\Request;

class Booking extends Model
{
    use HasFactory;

    //Table Name
    protected $table = 'bookings';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'event_id', 'customer_id',  'booked_at'
    ];

    public function customer()
    {
        return $this->belongsTo('App\Models\Customer','customer_id');
    }


    public function event()
    {
        return $this->belongsTo('App\Models\Event','event_id');
    }

    public function events()
    {
        return $this->belongsToMany(Event::class, 'tickets', 'booking_id', 'event_id')
            ->withPivot( 'tickets_full_price', 'tickets_reduced_price')
            ->withTimestamps();
    }

    /**
     * Calculate total booking cost of tickets.
     *
     * @param  \App\Models\Booking  $booking
     * @return mixed
     */
    public function getTotalCost(Booking $booking)
    {
        $tickets_full_price = $this->events()->value('tickets_full_price');
        $tickets_reduced_price = $this->events()->value('tickets_reduced_price');

        return ($tickets_full_price * $booking->event->price) + ($tickets_reduced_price * $booking->event->reduced_price);
    }

}
