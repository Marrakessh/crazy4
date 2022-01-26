<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Pivot
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'booking_id', 'event_id', 'tickets_full_price', 'tickets_reduced_price'
    ];

    //Table Name
    protected $table = 'tickets';

    public $incrementing = true;

    public function event() {
        return $this->belongsTo('event');
    }

    public function booking() {
        return $this->belongsTo('booking');
    }

}
