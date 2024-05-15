<?php

namespace App\Livewire;

use App\Models\Fraud;
use Livewire\Component;
use Livewire\WithPagination;

class FraudList extends Component
{
    use WithPagination;
    public $searchTerm = '';

    public function render()
    {
        $frauds = Fraud::when($this->searchTerm, function ($query) {
                $query->where('name', 'like', '%' . $this->searchTerm . '%')
                      ->orWhere('description', 'like', '%' . $this->searchTerm . '%');
            })
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('livewire.fraud-list', ['frauds' => $frauds]);
    }

    public function search()
    {
    }

}