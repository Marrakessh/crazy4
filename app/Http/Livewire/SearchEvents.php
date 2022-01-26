<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Event;

class SearchEvents extends Component
{
    //use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $searchTerm;

    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        return view('livewire.search-events',[
            'events' => Event::where('title','like', $searchTerm)->paginate(5)
        ]);
    }
}
