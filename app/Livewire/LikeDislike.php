<?php

namespace App\Livewire;

use Livewire\Component;

class LikeDislike extends Component
{

    public $fraud;
    public $likes;
    public $dislikes;

    public function mount($fraud)
    {
        $this->fraud = $fraud;
        $this->likes = $fraud->likes;
        $this->dislikes = $fraud->dislikes;
    }


    public function like()
    {
        if (!session('liked_' . $this->fraud->id)) {
            $this->likes++;
            $this->fraud->likes = $this->likes;
            session(['liked_' . $this->fraud->id => true]); // Marquer comme liké en session
            $this->fraud->save();
        }
    }
    public function dislike()
    {
        if (!session('disliked_' . $this->fraud->id)) {
            $this->dislikes++;
            $this->fraud->dislikes = $this->dislikes;
            session(['disliked_' . $this->fraud->id => true]); // Marquer comme disliké en session
            $this->fraud->save();
        }
    }

    public function render()
    {
        return view('livewire.like-dislike');
    }
}
