<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Event;

class Datepicker extends Component
{
    public $datetime;

    public function render()
    {
        return view('livewire.datepicker');
    }
}
