@extends('layouts.app')

@section('content')
<body class="bg-dark">

<div class="page-loading active">
    <div class="page-loading-inner">
      <div class="page-spinner"></div><span>Loading...</span>
    </div>
  </div>
  <main class="page-wrapper">

    <section
    class="bg-position-top-center bg-repeat-0 pt-5"
    style="
        background-image: url({{ asset('img/car-finder/home/scamalert.png') }});
        background-size: 1920px 630px;
    "
>
<div class="container pt-5">
    <div class="row pt-lg-4 pt-xl-5">
        <div class="col-lg-4 col-md-5 pt-3 pt-md-4 pt-lg-5">
            <h1 class="display-4 text-light pb-2 mb-4 me-md-n5">Signalez les fraudes en ligne, protégez la communauté</h1>
    <p class="fs-lg text-light opacity-70">Notre plateforme de signalement de fraudes en ligne vous permet de signaler rapidement toute activité suspecte sur Internet. Ensemble, aidons à prévenir les escroqueries en ligne et à protéger les utilisateurs.</p>

        </div>
        <div class="col-lg-8 col-md-7 pt-md-5">
            <img class="d-block mt-4 ms-auto"

               src="{{ asset('img/car-finder/home/scamalert.png') }}"
            width="800" alt="Signalement de fraude" />
        </div>
    </div>
</div>

</section>
<!-- Body type selection-->

<section class="container pt-sm-5 pt-4 pb-3">
    <div class="d-sm-flex align-items-center justify-content-between mb-3 mb-sm-4 pb-2">
        <h2 class="h3 text-light mb-3 mb-sm-0">Latest Frauds</h2>
        <div class="d-flex align-items-center">
            <ul class="nav nav-tabs nav-tabs-light fs-sm me-4 pe-2 mb-0">
                <li class="nav-item"><a class="nav-link" href="#">New</a></li>
                <li class="nav-item"><a class="nav-link active" href="#">Used</a></li>
            </ul>
            <a class="btn btn-link btn-light fw-normal px-0" href="{{ route('fraud.index') }}">View all<i class="fi-arrow-long-right fs-sm mt-0 ps-1 ms-2"></i></a>
        </div>
    </div>

    <div class="row">
        <!-- Blog post: Card vertical -->
        @foreach ($frauds as $fraud)
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card card-light card-hover h-100">
                <div class="card-img-top card-img-hover">
                    <a href="{{ route('fraud.show', $fraud->slug) }}" class="img-overlay"></a>
                    <div class="position-absolute start-0 top-0 pt-3 ps-3">
                        <span class="d-table badge bg-info">{{ $fraud->category->name }}</span>
                    </div>
                    <img src="{{ Storage::url('frauds/' . $fraud->firstImageName) }}" alt="Image">
                </div>
                <div class="card-body">
                    <h3 class="h6 mb-1">
                        <a href="{{ route('fraud.show', $fraud->slug) }}" class="nav-link-light">{{ $fraud->name }}</a>
                    </h3>
                    <p class="fs-sm text-light opacity-70">{{ implode(' ', array_slice(str_word_count(strip_tags($fraud->description), 1), 0, 50)) }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>


    <!-- Footer-->

</main>
</body>
@endsection
