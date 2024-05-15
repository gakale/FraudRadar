<?php

namespace App\Livewire;

use App\Models\Fraud;
use Livewire\Component;
use Livewire\WithPagination;

class FraudComments extends Component
{
    use WithPagination;
    public $fraud;

    public $perPage = 10;



    public function mount(Fraud $fraud)
    {
        $this->fraud = $fraud;
    }
    public function render()
    {
        return view('livewire.fraud-comments',[
              'comments' => $this->fraud->comments()
                ->with('user')
                ->orderBy('created_at', 'desc') // Tri par date de création décroissante
                ->paginate($this->perPage)
        ]);
    }
}
