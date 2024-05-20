<?php

namespace App\Livewire;

use App\Models\Fraud;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class UserPosts extends Component
{

    public $posts;
    public $perPage = 2; // Nombre initial de posts à afficher
    public $loadAmount = 2; // Nombre de posts à charger à chaque fois

    public function mount()
    {
        $this->posts = Fraud::where('user_id', auth()->id())
            ->orderBy('created_at', 'desc')
            ->take($this->perPage)
            ->get();
    }

    public function loadMore()
    {
        $this->perPage += $this->loadAmount;
        $this->posts = Fraud::where('user_id', auth()->id())
            ->orderBy('created_at', 'desc')
            ->take($this->perPage)
            ->get();
    }

    public function render()
    {
        return view('livewire.user-posts', [
            'posts' => $this->posts,
        ]);
    }
}
