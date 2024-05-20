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

        // Décoder les images pour chaque fraude
        foreach ($frauds as $fraud) {
            if (is_string($fraud->images)) {
                preg_match('/"file_name":"([^"]+)"/', $fraud->images, $matches);
                $fraud->firstImageName = $matches[1] ?? null;
            } else {
                $fraud->firstImageName = null; // No images found
            }
        }
        $view_count = $fraud->increment('view_count');

        return view('livewire.fraud-list',
        [
            'frauds' => $frauds,
            'view_count' => $view_count,

        ]);
    }
    public function search()
    {
    }

}
