<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


/**
 * Event
 *
 * @mixin Builder
 */
class Event extends Model
{
    use HasFactory;

    //Table Name
    protected $table = 'events';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'venue_id', 'datetime', 'price', 'reduced_price'
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function venue()
    {
        return $this->belongsTo('App\Models\Venue','venue_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function artists()
    {
        return $this->belongsToMany(Artist::class)->withTimestamps();
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function bookings()
    {
        return $this->belongsToMany(Booking::class, 'tickets', 'event_id', 'booking_id')
            ->withPivot('tickets_full_price', 'tickets_reduced_price')
            ->withTimestamps();
    }

    /**
     * Calculate no of tickets available.
     *
     * @param \App\Models\Event $event
     * @return int|mixed
     * @mixin Builder
     */
    public function ticketsAvailable(Event $event)
    {
          $capacity = Venue::find($event->venue->id)->capacity;

          $fullTicketsSold = DB::table('tickets')->where('event_id','=', $event->id)->sum('tickets_full_price');
          $reducedTicketsSold = DB::table('tickets')->where('event_id','=', $event->id)->sum('tickets_reduced_price');
        return ($capacity - ($fullTicketsSold + $reducedTicketsSold));
    }

}
