<?php

namespace App\Http\Livewire;

use App\Models\Artist;
use Livewire\Component;
use Livewire\WithPagination;

class AdminArtistSearch extends Component
{
    //use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $searchTerm;

    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        return view('livewire.admin-artist-search',[
            'artists' => Artist::where('name','like', $searchTerm)->paginate(5)
        ]);
    }
}
