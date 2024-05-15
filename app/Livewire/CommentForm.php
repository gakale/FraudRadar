<?php

namespace App\Livewire;

use App\Models\Comment;
use Livewire\Component;

class CommentForm extends Component
{
    public $fraud;
    public $name;
    public $email;
    public $comment;

    public function mount($fraud)
    {
        $this->fraud = $fraud;
    }

    public function render()
    {
        return view('livewire.comment-form');
    }

    public function submitComment()
    {
        // Validez les données du formulaire ici
        $this->validate([

            'comment' => 'required',
        ]);

        // Utilisez l'utilisateur actuellement connecté pour le user_id
        $userId = auth()->user() ? auth()->user()->id : null;

        // Enregistrez le commentaire
        Comment::create([
            'fraud_id' => $this->fraud->id,
            'user_id' => $userId,
            'content' => $this->comment,
        ]);

        // Réinitialisez le formulaire après la soumission
        $this->reset(['name', 'email', 'comment']);

        // Optionnel: affichez un message de réussite à l'utilisateur
        session()->flash('success', 'Votre commentaire a été soumis avec succès !');
    }
}



