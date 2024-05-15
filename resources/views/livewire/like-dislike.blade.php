<div>
    <button wire:click="like" class="btn btn-success fi fi-like" >Like ({{ $likes }})</button>
    <button wire:click="dislike" class="btn btn-danger fi fi-unlike">Dislike ({{ $dislikes }})</button>
</div>
