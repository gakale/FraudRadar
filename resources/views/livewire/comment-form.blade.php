<div>
    <h3 class="text-light mb-4 pb-sm-2">Laisser un commentaire </h3>

    <form wire:submit.prevent="submitComment" class="needs-validation row gy-md-4 gy-3 pb-sm-2" novalidate>
        @unless(auth()->check())
        <div class="col-sm-6">
            <label class="form-label text-light" for="comment-name">Name</label>
            <input type="text" id="comment-name" wire:model="name" class="form-control form-control-light form-control-lg" placeholder="Enter your name" required>
            @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-sm-6">
            <label class="form-label text-light" for="comment-email">Email</label>
            <input type="email" id="comment-email" wire:model="email" class="form-control form-control-light form-control-lg" placeholder="Enter your email" required>
            @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        @endunless
        <div class="col-12">
            <label class="form-label text-light" for="comment-text">Comment</label>
            <textarea wire:model="comment" id="comment-text" rows="4" class="form-control form-control-light form-control-lg" placeholder="Type comment here" required></textarea>
            @error('comment')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-12 py-2">
            <button class="btn btn-lg btn-primary" type="submit">Post comment</button>
        </div>
    </form>
    @if(session()->has('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif
</div>
