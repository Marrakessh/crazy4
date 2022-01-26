<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Event;

class EventList extends Component
{
    public $eventList;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
 //       $this->eventList = $eventList;
//        $eventList = Event::latest();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.event-list')->with('events', Event::all());
    }
}
