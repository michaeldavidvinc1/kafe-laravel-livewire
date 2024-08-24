<?php

namespace App\Livewire\Customer;

use App\Models\Customer;
use Livewire\Component;

class Index extends Component
{
    public $search;
    protected $listeners = ['reload' => '$refresh'];

    public function render()
    {
        return view('livewire.customer.index', [
            "customers" => Customer::when($this->search, function($customer){
                $customer->where('name', 'like', '%'.$this->search.'%')
                ->orWhere('contact', 'like', '%'.$this->search.'%')
                ->orWhere('desc', 'like', '%'.$this->search.'%');
            })->get()
        ]);
    }
}
