<div>
    <div class="mb-4 mb-md-5" id="comments">
        <h3 class="text-light mb-4 pb-2">{{ $comments->count() }} comments</h3>

        @foreach($comments as $comment)
            <div class="border-bottom border-light pb-4 mb-4">
                <p class="text-light opacity-70">{{ $comment->content }}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center pe-2">
                        <img class="rounded-circle me-1" src="{{ asset('storage/'.$comment->user->avatar) }}" width="48" alt="{{ $comment->user->name }}">
                        <div class="ps-2">
                            <h6 class="text-light fs-base mb-0">{{ $comment->user->name }}</h6>
                            <span class="text-light opacity-50 fs-sm">{{ $comment->created_at->diffForHumans() }}</span>
                        </div>
                    </div>

                </div>
            </div>
        @endforeach
    </div>

</div>
