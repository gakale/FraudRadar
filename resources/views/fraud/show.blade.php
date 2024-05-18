@extends('layouts.app')

@section('content')
<body class="bg-dark fixed-bottom-btn">
    <noscript>
        <iframe src="http://www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
      </noscript>

      <div class="page-loading active">
        <div class="page-loading-inner">
          <div class="page-spinner"></div><span>Loading...</span>
        </div>
      </div>
<main class="page-wrapper">
    <div class="container pt-5 pb-lg-4 my-5">
        <!-- Breadcrumb-->
        <nav class="mb-3 pb-md-1 pt-md-3" aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-light m-0">
            <li class="breadcrumb-item"><a href="car-finder-home.html">Home</a></li>
            <li class="breadcrumb-item"><a href="car-finder-blog.html">Fraud &amp; Show</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$fraud->name}}</li>
          </ol>
        </nav>
        <!-- Page title-->
        <h1 class="h2 text-light pb-3">{{$fraud->name}}</h1>
        <img class="rounded-3" src="{{ Storage::url('frauds/' . $imageName) }}" alt="Image">
        <div class="row mt-4 pt-3">
          <!-- Post content-->
          <div class="col-lg-8">
            <!-- Post meta-->
            <div class="d-flex flex-wrap border-bottom border-light pb-3 mb-4"><a class="text-uppercase text-decoration-none border-end border-light pe-3 me-3 mb-2" href="#">{{ $fraud->user->username }}</a>
              <div class="d-flex align-items-center text-light border-end border-light pe-3 me-3 mb-2"><i class="fi-calendar-alt opacity-70 me-2"></i><span>{{ $fraud->created_at->format('d F Y') }}</span></div>
              <div class="d-flex align-items-center text-light border-end border-light pe-3 me-3 mb-2"><i class="fi-clock opacity-70 me-2"></i><span>{{ $estimatedTime }}min de lecture</span></div><a class="d-flex align-items-center text-light text-decoration-none mb-2" href="#comments" data-scroll><i class="fi-chat-circle opacity-70 me-2"></i><span>{{ $commentCount }} Commentaires</span></a>
            </div>
            {!! $fraud->description !!}
            <!-- Tags + Sharing-->
            <div class="pt-4 pb-5 mb-md-3">
                <livewire:like-dislike :fraud="$fraud" />

              <div class="d-md-flex align-items-center justify-content-between border-top border-light pt-4">
                <div class="d-flex align-items-center me-3 mb-3 mb-md-0">
                  <div class="d-none d-sm-block text-light fw-bold text-nowrap mb-2 me-2 pe-1">Tags:</div>
                  <div class="d-flex flex-wrap">
                    <a class="btn btn-xs btn-translucent-light rounded-pill fs-sm fw-normal me-2 mb-2" href="#">
                        {{ $fraud->tags }}</a><a class="btn btn-xs btn-translucent-light rounded-pill fs-sm fw-normal me-2 mb-2" href="#">{{ $fraud->tags }}</a><a class="btn btn-xs btn-translucent-light rounded-pill fs-sm fw-normal mb-2" href="#">Harley Davidson</a></div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="text-light fw-bold text-nowrap pe-1 mb-2">Share:</div>
                    <div class="d-flex">
                        <a class="btn btn-icon btn-translucent-light btn-xs rounded-circle mb-2 ms-2" href="https://www.facebook.com/sharer/sharer.php?u={{ $shareUrl }}" data-bs-toggle="tooltip" title="Share with Facebook"><i class="fi-facebook"></i></a>
                        <a class="btn btn-icon btn-translucent-light btn-xs rounded-circle mb-2 ms-2" href="https://twitter.com/intent/tweet?url={{ $shareUrl }}" data-bs-toggle="tooltip" title="Share with Twitter"><i class="fi-twitter"></i></a>
                        <a class="btn btn-icon btn-translucent-light btn-xs rounded-circle mb-2 ms-2" href="https://www.linkedin.com/shareArticle?url={{ $shareUrl }}" data-bs-toggle="tooltip" title="Share with LinkedIn"><i class="fi-linkedin"></i></a>
                    </div>
                </div>
              </div>
            </div>
            <!-- Comments-->
            <livewire:fraud-comments :fraud="$fraud" />

            <!-- Comment form-->
            <livewire:comment-form :fraud="$fraud" />

          <!-- Sidebar-->

        </div>
      </div>
</main>
</body>
@endsection
