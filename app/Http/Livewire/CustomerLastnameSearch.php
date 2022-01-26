<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use Livewire\Component;
use Livewire\WithPagination;

class CustomerLastnameSearch extends Component
{
    //use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $searchTerm;

    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        return view('livewire.customer-lastname-search',[
            'customers' => Customer::where('lastname','like', $searchTerm)->paginate(5)
        ]);
    }
}
