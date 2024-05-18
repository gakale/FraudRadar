<div>
    <style>
        .tns-carousel-wrapper {
    /* Existing styles */
    position: relative; /* Ensure relative positioning for absolute child elements */
    overflow: hidden;  /* Hide any image overflow */
}

.tns-carousel-wrapper img {
    width: 100%;       /* Make the image take up the full width of the container */
    height: 100%;      /* Make the image take up the full height of the container */
    object-fit: cover; /* Maintain aspect ratio while covering the entire area */
}

.tns-carousel-wrapper .position-absolute {
    z-index: 1; /* Ensure overlay elements are above the image */
}
</style>
    <form wire:submit.prevent="search" class="d-flex align-items-center " >
        <div class="position-relative me-2">
            <input class="form-control form-control-sm form-control-light w-auto" type="text" placeholder="Search..." wire:model.debounce.500ms="searchTerm" style="max-width: 160px;">
            <i class="fi-search position-absolute top-50 end-0 translate-middle-y text-light opacity-70 me-3"></i>
        </div>
        <button class="btn btn-primary btn-sm" type="submit">Rechercher</button>
    </form>

    @foreach ($frauds as $fraud)
    <div class="card card-light card-hover card-horizontal mb-4">
        <div class="tns-carousel-wrapper card-img-top card-img-hover" >
            <a class="img-overlay" href="{{ route('fraud.show', $fraud->slug ) }}"></a>
            <div class="position-absolute start-0 top-0 pt-3 ps-3">
                <span class="d-table badge bg-info">{{ $fraud->category->name }}</span>
            </div>
            <div class="content-overlay end-0 top-0 pt-3 pe-3">
                <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist">
                    <i class="fi-heart"></i>
                </button>
            </div>
            <div class=" position-absolute top-0 h-100">
            @if ($fraud->firstImageName)
                <img src="{{ Storage::url('frauds/' . $fraud->firstImageName) }}" alt="Image">
            @else
                <p>No image available.</p>
            @endif
            </div>
        </div>
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-between pb-1">
                <span class="fs-sm text-light me-3">publié il y a {{ $fraud->created_at->diffForHumans() }}</span>
                <div class="form-check form-check-light">
                    <input class="form-check-input" type="checkbox" id="compare1">
                    <label class="form-check-label fs-sm" for="compare1">Compare</label>
                </div>
            </div>
            <h3 class="h6 mb-1"><a class="nav-link-light" href="{{ route('fraud.show', $fraud->slug ) }}">{{ $fraud->name }}</a></h3>
            <div class="text-primary fw-bold mb-1">{{ implode(' ', array_slice(str_word_count(strip_tags($fraud->description), 1), 0, 50)) }}</div>
            <div class="fs-sm text-light opacity-70"><i class="fi-map-pin me-1"></i>Chicago</div>
            <div class="border-top border-light mt-3 pt-3">
                <div class="row g-2">
                    <div class="col me-sm-1">
                        <div class="bg-dark rounded text-center w-100 h-100 p-2">
                            <i class="fi fi-like d-block h4 text-light mb-0 mx-center"></i>
                            <span class="fs-xs text-light">{{ $fraud->likes > 0 ? $fraud->likes : 0 }}</span>
                        </div>
                    </div>
                    <div class="col me-sm-1">
                        <div class="bg-dark rounded text-center w-100 h-100 p-2">
                            <i class="fi fi-mail d-block h4 text-light mb-0 mx-center"></i>
                            <span class="fs-xs text-light">{{ $fraud->comments->count() }}</span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="bg-dark rounded text-center w-100 h-100 p-2">
                            <i class="fi fi-dislike d-block h4 text-light mb-0 mx-center"></i>
                            <span class="fs-xs text-light">{{ $fraud->dislikes > 0 ? $fraud->dislikes : 0 }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <div class="d-flex align-items-center justify-content-between py-2">
        <div class="d-flex align-items-center me-sm-4">
            <label class="fs-sm text-light me-2 pe-1 text-nowrap" for="sorting2">
                <i class="fi-arrows-sort mt-n1 me-2"></i>Sort by:
            </label>
            <select class="form-select form-select-light form-select-sm me-2 me-sm-4" id="sorting2">
                <option>Newest</option>
                <option>Popular</option>
                <option>Price: Low - High</option>
                <option>Price: High - Low</option>
            </select>
            <div class="d-none d-md-block border-end border-light" style="height: 1.25rem;"></div>
            <div class="d-none d-md-block fw-bold text-light opacity-70 text-nowrap ps-md-4">
                <i class="fi-switch-horizontal me-2"></i><span class="align-middle">Compare (0)</span>
            </div>
        </div>
        <nav aria-label="Pagination">
            <ul class="pagination pagination-light mb-0">
                {{-- Previous Page Link --}}
                @if ($frauds->onFirstPage())
                    <li class="page-item d-sm-none text-nowrap disabled">
                        <span class="page-link page-link-static">‹</span>
                    </li>
                @else
                    <li class="page-item d-none d-sm-block">
                        <a class="page-link" href="{{ $frauds->previousPageUrl() }}" aria-label="Previous">
                            <span aria-hidden="true">‹</span>
                        </a>
                    </li>
                @endif

                {{-- Pagination Elements --}}
                @for ($i = 1; $i <= $frauds->lastPage(); $i++)
                    @if ($i == $frauds->currentPage())
                        <li class="page-item active d-none d-sm-block" aria-current="page">
                            <span class="page-link">{{ $i }}<span class="visually-hidden">(current)</span></span>
                        </li>
                    @else
                        <li class="page-item d-none d-sm-block">
                            <a class="page-link" href="{{ $frauds->url($i) }}">{{ $i }}</a>
                        </li>
                    @endif
                @endfor

                {{-- Next Page Link --}}
                @if ($frauds->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $frauds->nextPageUrl() }}" aria-label="Next">
                            <span aria-hidden="true">›</span>
                        </a>
                    </li>
                @else
                    <li class="page-item disabled">
                        <span class="page-link page-link-static">›</span>
                    </li>
                @endif
            </ul>
        </nav>
    </div>
</div>
