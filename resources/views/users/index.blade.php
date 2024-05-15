@extends('layouts.app')

@section('content')
<main class="page-wrapper">
    <!-- Navbar-->

    <!-- Page content-->
    <!-- Page container-->
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
            <li class="nav-item mb-md-0 me-md-2 pe-md-1"><a class="nav-link active" href="job-board-account-profile.html" aria-current="page"><i class="fi-settings mt-n1 me-2 fs-base"></i>Profile Settings</a></li>
            <li class="nav-item mb-md-0 me-md-2 pe-md-1"><a class="nav-link" href="{{ route('user.post') }}"><i class="fi-file mt-n1 me-2 fs-base"></i>Mes Posts</a></li>
            <li class="nav-item d-md-none"><a class="nav-link" href="signin-light.html"><i class="fi-logout mt-n1 me-2 fs-base"></i>Sign Out</a></li>
          </ul>
        </div>
        <!-- Authorization info-->
        <div class="row pt-4 mt-3">
          <div class="col-lg-3">
            <h2 class="h4">Authorization info</h2>
          </div>
          <div class="col-lg-9">
            <div class="border rounded-3 p-3" id="auth-info">
              <!-- Email-->
              <div class="border-bottom pb-3 mb-3">
                <div class="d-flex align-items-center justify-content-between">
                  <div class="pe-2">
                    <label class="form-label fw-bold">Email</label>
                    <div id="email-value">{{ $user->email }}</div>
                  </div>
                  <div data-bs-toggle="tooltip" title="Edit"><a class="nav-link py-0" href="#email-collapse" data-bs-toggle="collapse"><i class="fi-edit"></i></a></div>
                </div>
                <div class="collapse" id="email-collapse" data-bs-parent="#auth-info">
                  <input class="form-control mt-3" type="email" data-bs-binded-element="#email-value" data-bs-unset-value="Not specified" value="{{ $user->email }}" nam="email">
                </div>
              </div>
              <!-- Password-->
              <div>
                <div class="d-flex align-items-center justify-content-between">
                  <div class="pe-2">
                    <label class="form-label fw-bold">Password</label>
                    <div>********</div>
                  </div>
                  <div data-bs-toggle="tooltip" title="Edit"><a class="nav-link py-0" href="#password-collapse" data-bs-toggle="collapse"><i class="fi-edit"></i></a></div>
                </div>
                <div class="collapse" id="password-collapse" data-bs-parent="#auth-info">
                  <div class="row gx-3 align-items-center my-3">
                    <label class="col-sm-4 col-md-3 col-form-label" for="account-password-current">Current password:</label>
                    <div class="col-sm-8 col-md-9">
                      <div class="password-toggle">
                        <input class="form-control" type="password" id="account-password-current" placeholder="Enter current password">
                        <label class="password-toggle-btn" aria-label="Show/hide password">
                          <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="row gx-3 align-items-center my-3">
                    <label class="col-sm-4 col-md-3 col-form-label" for="account-password-new">New password:</label>
                    <div class="col-sm-8 col-md-9">
                      <div class="password-toggle">
                        <input class="form-control" type="password" id="account-password-new" placeholder="Enter new password">
                        <label class="password-toggle-btn" aria-label="Show/hide password">
                          <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="row gx-3 align-items-center">
                    <label class="col-sm-4 col-md-3 col-form-label" for="account-password-confirm">Confirm new password:</label>
                    <div class="col-sm-8 col-md-9">
                      <div class="password-toggle">
                        <input class="form-control" type="password" id="account-password-confirm" placeholder="Confirm new password">
                        <label class="password-toggle-btn" aria-label="Show/hide password">
                          <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Personal details-->
        <div class="row pt-4 mt-2">
          <div class="col-lg-3">
            <h2 class="h4">Détails personnel</h2>
          </div>
          <div class="col-lg-9">
            <div class="border rounded-3 p-3" id="personal-details">
              <!-- Full name-->
              <div class="border-bottom pb-3 mb-3">
                <div class="d-flex align-items-center justify-content-between">
                  <div class="pe-2">
                    <label class="form-label fw-bold">Full name</label>
                    <div id="fn-value">{{ $user->name }}</div>
                  </div>
                  <div data-bs-toggle="tooltip" title="Edit"><a class="nav-link py-0" href="#fn-collapse" data-bs-toggle="collapse"><i class="fi-edit"></i></a></div>
                </div>
                <div class="collapse" id="fn-collapse" data-bs-parent="#personal-details">
                  <input class="form-control mt-3" type="email" data-bs-binded-element="#fn-value" data-bs-unset-value="Not specified" value="Annette Black">
                </div>
              </div>
              <!-- Gender-->
              <div class="border-bottom pb-3 mb-3">
                <div class="d-flex align-items-center justify-content-between">
                  <div class="pe-2">
                    <label class="form-label fw-bold">Gender</label>
                    <div id="gender-value">Female</div>
                  </div>
                  <div data-bs-toggle="tooltip" title="Edit"><a class="nav-link py-0" href="#gender-collapse" data-bs-toggle="collapse"><i class="fi-edit"></i></a></div>
                </div>
                <div class="collapse" id="gender-collapse" data-bs-parent="#personal-details">
                  <select class="form-select mt-3" data-bs-binded-element="#gender-value">
                    <option value="" disabled>Select your gender</option>
                    <option value="Male">Male</option>
                    <option value="Female" selected>Female</option>
                  </select>
                </div>
              </div>
              <!-- Date of birth-->
              <div class="border-bottom pb-3 mb-3">
                <div class="d-flex align-items-center justify-content-between">
                  <div class="pe-2">
                    <label class="form-label fw-bold">Date of birth</label>
                    <div id="birth-value">Not specified</div>
                  </div>
                  <div data-bs-toggle="tooltip" title="Edit"><a class="nav-link py-0" href="#birth-collapse" data-bs-toggle="collapse"><i class="fi-edit"></i></a></div>
                </div>
                <div class="collapse" id="birth-collapse" data-bs-parent="#personal-details">
                  <div class="mt-3 pt-3 border-top">
                    <div class="input-group">
                      <input class="form-control date-picker rounded pe-5" type="text" data-bs-binded-element="#birth-value" data-datepicker-options="{&quot;altInput&quot;: true, &quot;altFormat&quot;: &quot;F j, Y&quot;, &quot;dateFormat&quot;: &quot;F j, Y&quot;}" placeholder="Choose date"><i class="fi-calendar text-muted position-absolute top-50 end-0 translate-middle-y me-3"></i>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Phone number-->
              <div class="border-bottom pb-3 mb-3">
                <div class="d-flex align-items-center justify-content-between">
                  <div class="pe-2">
                    <label class="form-label fw-bold">Phone number</label>
                    <div id="phone-value">(302) 555-0107</div>
                  </div>
                  <div data-bs-toggle="tooltip" title="Edit"><a class="nav-link py-0" href="#phone-collapse" data-bs-toggle="collapse"><i class="fi-edit"></i></a></div>
                </div>
                <div class="collapse" id="phone-collapse" data-bs-parent="#personal-details">
                  <input class="form-control mt-3" type="text" data-bs-binded-element="#phone-value" data-bs-unset-value="Not specified" value="(302) 555-0107">
                </div>
              </div>
              <!-- Address-->
              <div class="border-bottom pb-3 mb-3">
                <div class="d-flex align-items-center justify-content-between">
                  <div class="pe-2">
                    <label class="form-label fw-bold">Address</label>
                    <div id="address-value">Not specified</div>
                  </div>
                  <div data-bs-toggle="tooltip" title="Edit"><a class="nav-link py-0" href="#address-collapse" data-bs-toggle="collapse"><i class="fi-edit"></i></a></div>
                </div>
                <div class="collapse" id="address-collapse" data-bs-parent="#personal-details">
                  <input class="form-control mt-3" type="text" data-bs-binded-element="#address-value" data-bs-unset-value="Not specified" placeholder="Enter address">
                </div>
              </div>
              <!-- Socials-->
              <div>
                <div class="d-flex align-items-center justify-content-between">
                  <div class="pe-2">
                    <label class="form-label fw-bold">Socials</label>
                    <ul class="list-unstyled mb-0">
                      <li id="facebook-value">Not specified</li>
                      <li id="linkedin-value"></li>
                      <li id="twitter-value"></li>
                      <li id="instagram-value"></li>
                      <li id="behance-value"></li>
                    </ul>
                  </div>
                  <div data-bs-toggle="tooltip" title="Edit"><a class="nav-link py-0" href="#socials-collapse" data-bs-toggle="collapse"><i class="fi-edit"></i></a></div>
                </div>

              </div>
            </div>
          </div>
        </div>
        <!-- Account settings-->
        <div class="row pt-4 mt-2">
          <div class="col-lg-3">
            <h2 class="h4">Account settings</h2>
          </div>

        </div>
        <!-- Action buttons-->
        <div class="row pt-4 mt-2">
          <div class="col-lg-9 offset-lg-3">
            <div class="d-flex align-items-center justify-content-between">
              <button class="btn btn-primary rounded-pill px-3 px-sm-4" type="button">Save changes</button>
              <button class="btn btn-link btn-sm px-0" type="button"><i class="fi-trash me-2"></i>Delete account</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
