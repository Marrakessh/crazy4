<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Artist;

class SearchArtists extends Component
{
   // use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $searchTerm;

    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        return view('livewire.search-artists',[
            'artists' => Artist::where('name','like', $searchTerm)->paginate(5)
        ]);
    }
}
