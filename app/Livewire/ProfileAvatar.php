<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProfileAvatar extends Component
{
     use WithFileUploads;

    public $avatar;

    public function updatedAvatar()
    {
        $this->validate([
            'avatar' => 'image|max:1024', // 1MB Max
        ]);

        $user = Auth::user();
        $path = $this->avatar->store('avatars', 'public');

        $user->avatar = $path;
        $user->save();

        session()->flash('message', 'Avatar updated successfully.');
    }
    public function render()
    {
        return view('livewire.profile-avatar', [
            'user' => Auth::user(),
        ]);
    }
}
