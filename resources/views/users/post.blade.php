@extends('layouts.app')
@section('content')
<main class="page-wrapper">
    <!-- Navbar-->

    <!-- Page content-->
    <!-- Page container-->

      <!-- Breadcrumb-->
      <div class="position-absolute top-0 start-0 w-100 bg-dark" style="height: 398px;"></div>
      <div class="container content-overlay mt-5 mb-md-4 py-5">
        <!-- Breadcrumb-->
        <nav class="mb-3 mb-md-4 pt-md-3" aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-light">
            <li class="breadcrumb-item"><a href="job-board-home-v1.html">Home</a></li>
            <li class="breadcrumb-item"><a href="job-board-account-profile.html">Account</a></li>
            <li class="breadcrumb-item active" aria-current="page">Profile settings</li>
          </ol>
        </nav>
      <!-- Page card like wrapper-->
      <div class="bg-light shadow-sm rounded-3 p-4 p-md-5 mb-2">
        <!-- Account header-->
        <div class="d-flex align-items-start justify-content-between pb-4 mb-2">
          <div class="d-flex align-items-start">
            <div class="position-relative flex-shrink-0"><img class="rounded-circle" src="{{ asset('img/avatars/37.png') }}" width="100" alt="Annette Black">
              <button class="btn btn-icon btn-light btn-xs rounded-circle shadow-sm position-absolute end-0 bottom-0" type="button" data-bs-toggle="tooltip" title="Change image"><i class="fi-pencil fs-xs"></i></button>
            </div>
            <div class="ps-3 ps-sm-4">
              <h3 class="h5">{{ $user->username }}</h3>
              <ul class="list-unstyled fs-sm mb-0">
                <li class="d-flex text-nav text-break"><i class="fi-mail opacity-60 mt-1 me-2"></i><span>{{ $user->username }}</span></li>
                <li class="d-flex text-nav text-break"><i class="fi-phone opacity-60 mt-1 me-2"></i><span>(302) 555-0107</span></li>
              </ul>
            </div>
          </div><a class="nav-link p-0 d-none d-md-block" href="signin-light.html"><i class="fi-logout mt-n1 me-2"></i>Sign out</a>
        </div>
        <!-- Account menu--><a class="btn btn-outline-primary btn-lg rounded-pill w-100 d-md-none" href="#account-nav" data-bs-toggle="collapse"><i class="fi-align-justify me-2"></i>Account Menu</a>
        <div class="collapse d-md-block" id="account-nav">
          <ul class="nav nav-pills flex-column flex-md-row pt-3 pt-md-0 pb-md-4 border-bottom-md">
            <li class="nav-item mb-md-0 me-md-2 pe-md-1"><a class="nav-link" href="{{ route('user.index') }}"><i class="fi-settings mt-n1 me-2 fs-base"></i>Profile Settings</a></li>
            <li class="nav-item mb-md-0 me-md-2 pe-md-1"><a class="nav-link active" href="job-board-account-my-resumes.html" aria-current="page"><i class="fi-file mt-n1 me-2 fs-base"></i>Mes Posts</a></li>
            <li class="nav-item d-md-none"><a class="nav-link" href="signin-light.html"><i class="fi-logout mt-n1 me-2 fs-base"></i>Sign Out</a></li>
          </ul>
        </div>
        <!-- Page title-->
        <div class="d-flex align-items-center justify-content-between py-4 mt-3 mb-2">
          <h1 class="h3 mb-0">Mes Posts</h1><a class="fw-bold text-decoration-none" href="#"><i class="fi-pencil me-2"></i><span class="align-middle">All</span></a>
        </div>
        <div class="row">
          <!-- Sidebar-->
          <div class="col-md-3 mb-4 pb-3 pb-md-0">
            <div style="max-width: 13rem;">
              <ul class="list-unstyled fs-sm pb-1 pb-md-3">
                <li><a class="nav-link fw-normal d-flex align-items-center px-0 py-1" href="#"><i class="fi-file opacity-70 me-2"></i><span>Publié</span><span class="text-muted ms-auto">(3)</span></a></li>
                <li><a class="nav-link fw-normal d-flex align-items-center px-0 py-1" href="#"><i class="fi-file-clean opacity-70 me-2"></i><span>En attente</span><span class="text-muted ms-auto">(0)</span></a></li>
                <li><a class="nav-link fw-normal d-flex align-items-center px-0 py-1" href="#"><i class="fi-archive opacity-70 me-2"></i><span>Supprimé</span><span class="text-muted ms-auto">(0)</span></a></li>
              </ul><a class="btn btn-primary rounded-pill w-100" href="job-board-post-resume-1.html"><i class="fi-plus fs-sm me-2"></i>Signalé une fraude</a>
            </div>
          </div>
          <!-- List of resumes-->
          <div class="col-md-9">
            <!-- Item-->
            <div class="card bg-secondary card-hover mb-2">
              <div class="card-body">
                <div class="d-flex justify-content-between">
                  <div class="d-flex align-items-start"><img class="d-none d-sm-block" src="img/avatars/38.png" width="100" alt="Resume picture">
                    <div class="ps-sm-3">
                      <h3 class="h6 card-title pb-1 mb-2"><a class="stretched-link text-nav text-decoration-none" href="#">Lead Web Designer</a></h3>
                      <div class="fs-sm">
                        <div class="text-nowrap mb-2"><i class="fi-map-pin text-muted me-1"> </i>New York</div>
                        <div class="text-nowrap"><i class="fi-cash fs-base text-muted me-1"></i>$4,000</div>
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
            <!-- Item-->
            <div class="card bg-secondary card-hover mb-2">
              <div class="card-body">
                <div class="d-flex justify-content-between">
                  <div class="d-flex align-items-start"><img class="d-none d-sm-block" src="img/avatars/37.png" width="100" alt="Resume picture">
                    <div class="ps-sm-3">
                      <h3 class="h6 card-title pb-1 mb-2"><a class="stretched-link text-nav text-decoration-none" href="#"><span class="me-3">Graphic Designer</span><span class="badge bg-faded-accent fs-sm rounded-pill">Featured</span></a></h3>
                      <div class="fs-sm">
                        <div class="text-nowrap mb-2"><i class="fi-map-pin text-muted me-1"> </i>New York</div>
                        <div class="text-nowrap"><i class="fi-cash fs-base text-muted me-1"></i>$2,000 - $2,500</div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex flex-column align-items-end justify-content-between">
                    <div class="dropdown position-relative zindex-5 mb-3">
                      <button class="btn btn-icon btn-light btn-xs rounded-circle shadow-sm" type="button" id="contextMenu2" data-bs-toggle="dropdown" aria-expanded="false"><i class="fi-dots-vertical"></i></button>
                      <ul class="dropdown-menu my-1" aria-labelledby="contextMenu2">
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
                    </div><strong class="fs-sm">203 views</strong>
                  </div>
                </div>
              </div>
            </div>
            <!-- Item-->
            <div class="card bg-secondary card-hover">
              <div class="card-body">
                <div class="d-flex justify-content-between">
                  <div class="d-flex align-items-start"><img class="d-none d-sm-block" src="img/avatars/37.png" width="100" alt="Resume picture">
                    <div class="ps-sm-3">
                      <h3 class="h6 card-title pb-1 mb-2"><a class="stretched-link text-nav text-decoration-none" href="#">Identity Designer / Illustrator</a></h3>
                      <div class="fs-sm">
                        <div class="text-nowrap mb-2"><i class="fi-map-pin text-muted me-1"> </i>New York</div>
                        <div class="text-nowrap"><i class="fi-cash fs-base text-muted me-1"></i>$2,500</div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex flex-column align-items-end justify-content-between">
                    <div class="dropdown position-relative zindex-1 mb-3">
                      <button class="btn btn-icon btn-light btn-xs rounded-circle shadow-sm" type="button" id="contextMenu3" data-bs-toggle="dropdown" aria-expanded="false"><i class="fi-dots-vertical"></i></button>
                      <ul class="dropdown-menu my-1" aria-labelledby="contextMenu3">
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
                    </div><strong class="fs-sm">92 views</strong>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  @endsection
