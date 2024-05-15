<?php

namespace App\Livewire;

use App\Models\Fraud;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class UserPosts extends Component
{
    use WithPagination;

    public $perPage = 10; // Nombre de posts par page

    public function render()
    {
        $userId = auth()->id(); // Récupère l'ID de l'utilisateur connecté

        return view('livewire.user-posts', [
            'posts' => Fraud::where('user_id', $userId)
                ->orderBy('created_at', 'desc') // Trie par date de création décroissante
                ->paginate($this->perPage),
        ]);
    }
}
