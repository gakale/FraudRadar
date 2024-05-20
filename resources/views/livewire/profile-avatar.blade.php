<div>
    <div class="position-relative flex-shrink-0">
        <img class="rounded-circle" src="{{ asset('storage/' . Auth::user()->avatar) }}" width="100" alt="{{ Auth::user()->name }}">
        <input type="file" wire:model="avatar" id="avatarUpload" class="d-none">
        <button class="btn btn-icon btn-light btn-xs rounded-circle shadow-sm position-absolute end-0 bottom-0" type="button" data-bs-toggle="tooltip" title="Change image" onclick="document.getElementById('avatarUpload').click();">
            <i class="fi-pencil fs-xs"></i>
        </button>
        @error('avatar') <span class="error">{{ $message }}</span> @enderror
    </div>


</div>
