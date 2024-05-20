<div>
    @foreach($posts as $post)
        <div class="card bg-secondary card-hover mb-2">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                  <div class="d-flex align-items-start"><img class="d-none d-sm-block" src="img/avatars/38.png" width="100" alt="Resume picture">
                    <div class="ps-sm-3">
                      <h3 class="h6 card-title pb-1 mb-2"><a class="stretched-link text-nav text-decoration-none" href="#">{{ $post->name }}</a></h3>
                      <div class="fs-sm">
                        <div class="text-nowrap mb-2"><i class="fi-map-pin text-muted me-1"> </i>{{ $post->category->name }}</div>
                        <div class="text-nowrap"><i class="fi-cash fs-base text-muted me-1"></i>{{ $post->likes }}</div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex flex-column align-items-end justify-content-between">
                    <div class="dropdown position-relative zindex-10 mb-3">
                      <button class="btn btn-icon btn-light btn-xs rounded-circle shadow-sm" type="button" id="contextMenu1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fi-dots-vertical"></i></button>
                      <ul class="dropdown-menu my-1" aria-labelledby="contextMenu1">
                        <li>
                          <button class="dropdown-item" type="button"><i class="fi-edit opacity-60 me-2"></i>Edit</button>
                        </li>
                        <li>
                          <button class="dropdown-item" type="button"><i class="fi-flame opacity-60 me-2"></i>Promote</button>
                        </li>
                        <li>
                          <button class="dropdown-item" type="button"><i class="fi-download-file opacity-60 me-2"></i>Download as PDF</button>
                        </li>
                        <li>
                          <button class="dropdown-item" type="button"><i class="fi-power opacity-60 me-2"></i>Deactivate</button>
                        </li>
                        <li>
                          <button class="dropdown-item" type="button"><i class="fi-trash opacity-60 me-2"></i>Delete</button>
                        </li>
                      </ul>
                    </div><strong class="fs-sm">80 views</strong>
                  </div>
                </div>
              </div>
        </div>
    @endforeach

    <div class="mt-4 text-center">
        @if ($posts->count() >= $perPage)
            <button class="btn btn-primary" wire:click="loadMore">Voir plus</button>
        @endif
    </div>
</div>
