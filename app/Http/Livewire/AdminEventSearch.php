<?php

namespace App\Http\Livewire;

use App\Models\Event;
use Livewire\Component;
use Livewire\WithPagination;

class AdminEventSearch extends Component
{
    //use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $searchTerm;

    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        return view('livewire.admin-event-search',[
            'events' => Event::where('title','like', $searchTerm)->paginate(5)
        ]);
    }
}
