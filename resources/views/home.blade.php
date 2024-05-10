@extends('layouts.app')

@section('content')

<div class="page-loading active">
    <div class="page-loading-inner">
      <div class="page-spinner"></div><span>Loading...</span>
    </div>
  </div>
  <main class="page-wrapper">
    <!-- Sign In Modal-->

    <!-- Navbar-->

    <!-- Page content-->
    <!-- Hero-->
    <section class="bg-dark pb-3 pt-5">
      <div class="container py-5">
        <div class="row align-items-center mt-2 mt-md-0 pt-md-4 py-lg-5">
          <div class="col-md-4 order-md-2 mb-5 mb-md-0">
            <div class="parallax mx-auto" style="max-width: 416px;">
            <div class="parallax-layer position-relative" data-depth="0.1"><img src="{{ asset('img/job-board/hero-banner-2/layer01.svg') }}" alt="Layer"></div>
            <div class="parallax-layer" data-depth="0.15"><img src="{{ asset('img/job-board/hero-banner-2/layer02.svg') }}" alt="Layer"></div>
            <div class="parallax-layer" data-depth="0.2"><img src="{{ asset('img/job-board/hero-banner-2/layer03.svg') }}" alt="Layer"></div>
            <div class="parallax-layer" data-depth="0.4"><img src="{{ asset('img/job-board/hero-banner-2/layer04.svg') }}" alt="Layer"></div>
            <div class="parallax-layer" data-depth="0.16"><img src="{{ asset('img/job-board/hero-banner-2/layer05.svg') }}" alt="Layer"></div>
            <div class="parallax-layer" data-depth="0.2"><img src="{{ asset('img/job-board/hero-banner-2/layer06.svg') }}" alt="Layer"></div>
            <div class="parallax-layer" data-depth="0.25"><img src="{{ asset('img/job-board/hero-banner-2/layer07.svg') }}" alt="Layer"></div>
            <div class="parallax-layer" data-depth="0.2"><img src="{{ asset('img/job-board/hero-banner-2/layer08.svg') }}" alt="Layer"></div>
            </div>
          </div>
          <div class="col-md-8 order-md-1">
            <h1 class="display-4 text-light pb-3 mb-4 mb-lg-5" style="max-width: 746px;">Signalez une <span class='text-primary'>fraude en ligne</span> pour aider notre communauté</h1>            <!-- Search form-->
            <form class="form-group form-group-light d-block rounded-xl-pill mb-2 my-md-4 mt-xl-5">
              <div class="row align-items-center g-0 ms-n2">
                <div class="col-xl-4">
                  <div class="input-group input-group-lg border-end-xl border-light"><span class="input-group-text text-light rounded-pill opacity-50 ps-3"><i class="fi-search"></i></span>
                    <input class="form-control" type="text" placeholder="Search site...">
                  </div>
                </div>
                <hr class="hr-light d-xl-none my-2">
                <div class="col-xl-8 d-lg-flex align-items-center">
                  <div class="d-sm-flex w-100">
                    <div class="dropdown w-100 border-end-sm border-light" data-bs-toggle="select">
                      <button class="btn btn-link dropdown-toggle" type="button" data-bs-toggle="dropdown"><i class="fi-list me-2"></i><span class="dropdown-toggle-label">Category</span></button>
                      <input type="hidden">
                      <ul class="dropdown-menu dropdown-menu-dark my-3">
                        <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Accounting</span></a></li>
                        <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Marketing &amp; PR</span></a></li>
                        <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Medicine</span></a></li>
                        <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">IT</span></a></li>
                        <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">HoReCa</span></a></li>
                        <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Fitness &amp; sports</span></a></li>
                        <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Transportation</span></a></li>
                      </ul>
                    </div>
                    <hr class="hr-light d-sm-none my-2">
                    <div class="dropdown w-100" data-bs-toggle="select">
                      <button class="btn btn-link dropdown-toggle" type="button" data-bs-toggle="dropdown"><i class="fi-map-pin me-2"></i><span class="dropdown-toggle-label">Location</span></button>
                      <input type="hidden">
                      <ul class="dropdown-menu dropdown-menu-dark my-3">
                        <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Dallas</span></a></li>
                        <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Chicago</span></a></li>
                        <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Houston</span></a></li>
                        <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Las Vegas</span></a></li>
                        <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Los Angeles</span></a></li>
                        <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">New York</span></a></li>
                        <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">San Francisco</span></a></li>
                      </ul>
                    </div>
                  </div>
                  <hr class="hr-light d-xl-none mt-2 mb-3">
                  <button class="btn btn-primary btn-lg rounded-pill w-100 w-lg-auto ms-auto" type="button">Find resumes</button>
                </div>
              </div>
            </form>
            <!-- Statistics-->
            <div class="row d-none d-lg-flex pt-5">
              <div class="col-xl-10 d-flex">
                <div class="border-end border-light pe-4 me-3">
                  <div class="text-light me-3">
                    <div class="fs-3 fw-bold mb-1">1,2 mln</div>
                    <div class="fs-sm opacity-70">Job applications</div>
                  </div>
                </div>
                <div class="border-end border-light px-4 me-3">
                  <div class="text-light me-3">
                    <div class="fs-3 fw-bold mb-1">8K</div>
                    <div class="fs-sm opacity-70">Resumes posted</div>
                  </div>
                </div>
                <div class="border-end border-light px-4 me-3">
                  <div class="text-light me-3">
                    <div class="fs-3 fw-bold mb-1">5K</div>
                    <div class="fs-sm opacity-70">Jobs posted</div>
                  </div>
                </div>
                <div class="ps-4">
                  <div class="text-light">
                    <div class="fs-3 fw-bold mb-1">10K</div>
                    <div class="fs-sm opacity-70">Active members</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Categories-->
    <section class="position-relative bg-white rounded-xxl-4 pt-md-3 zindex-5" style="margin-top: -30px;">
      <div class="container pt-5 pb-3 mb-4 mb-md-5">
        <h2 class="h3 pb-2 pb-sm-3">Resumes by category</h2>
        <div class="d-flex flex-wrap flex-column flex-sm-row"><a class="icon-box card flex-row align-items-center flex-shrink-0 card-hover border-0 bg-secondary rounded-pill py-2 ps-2 pe-4 mb-2 mb-sm-3 me-sm-3 me-xxl-4" href="job-board-catalog.html">
            <div class="icon-box-media bg-light text-primary rounded-circle me-2"><i class="fi-accounting"></i></div>
            <h3 class="icon-box-title fs-sm ps-1 pe-2 mb-0">Accounting</h3></a><a class="icon-box card flex-row align-items-center flex-shrink-0 card-hover border-0 bg-secondary rounded-pill py-2 ps-2 pe-4 mb-2 mb-sm-3 me-sm-3 me-xxl-4" href="job-board-catalog.html">
            <div class="icon-box-media bg-light text-primary rounded-circle me-2"><i class="fi-pie-chart"></i></div>
            <h3 class="icon-box-title fs-sm ps-1 pe-2 mb-0">Marketing &amp; PR</h3></a><a class="icon-box card flex-row align-items-center flex-shrink-0 card-hover border-0 bg-secondary rounded-pill py-2 ps-2 pe-4 mb-2 mb-sm-3 me-sm-3 me-xxl-4" href="job-board-catalog.html">
            <div class="icon-box-media bg-light text-primary rounded-circle me-2"><i class="fi-meds"></i></div>
            <h3 class="icon-box-title fs-sm ps-1 pe-2 mb-0">Medicine</h3></a><a class="icon-box card flex-row align-items-center flex-shrink-0 card-hover border-0 bg-secondary rounded-pill py-2 ps-2 pe-4 mb-2 mb-sm-3 me-sm-3 me-xxl-4" href="job-board-catalog.html">
            <div class="icon-box-media bg-light text-primary rounded-circle me-2"><i class="fi-plant"></i></div>
            <h3 class="icon-box-title fs-sm ps-1 pe-2 mb-0">Agriculture</h3></a><a class="icon-box card flex-row align-items-center flex-shrink-0 card-hover border-0 bg-secondary rounded-pill py-2 ps-2 pe-4 mb-2 mb-sm-3 me-sm-3 me-xxl-4" href="job-board-catalog.html">
            <div class="icon-box-media bg-light text-primary rounded-circle me-2"><i class="fi-computer"></i></div>
            <h3 class="icon-box-title fs-sm ps-1 pe-2 mb-0">IT</h3></a><a class="icon-box card flex-row align-items-center flex-shrink-0 card-hover border-0 bg-secondary rounded-pill py-2 ps-2 pe-4 mb-2 mb-sm-3 me-sm-3 me-xxl-4" href="job-board-catalog.html">
            <div class="icon-box-media bg-light text-primary rounded-circle me-2"><i class="fi-security"></i></div>
            <h3 class="icon-box-title fs-sm ps-1 pe-2 mb-0">Security</h3></a>
          <div class="dropdown mb-2 mb-sm-3"><a class="icon-box card flex-row align-items-center flex-shrink-0 card-hover border-0 bg-secondary rounded-pill py-2 ps-2 pe-4" href="job-board-catalog.html" data-bs-toggle="dropdown">
              <div class="icon-box-media bg-light text-primary rounded-circle me-2"><i class="fi-dots-horisontal"></i></div>
              <h3 class="icon-box-title fs-sm ps-1 pe-2 mb-0">More</h3></a>
            <div class="dropdown-menu dropdown-menu-sm-end my-1"><a class="dropdown-item fw-bold" href="job-board-catalog.html"><i class="fi-briefcase fs-base opacity-60 me-2"></i>Management</a><a class="dropdown-item fw-bold" href="job-board-catalog.html"><i class="fi-building fs-base opacity-60 me-2"></i>Construction</a><a class="dropdown-item fw-bold" href="job-board-catalog.html"><i class="fi-car fs-base opacity-60 me-2"></i>Transportation</a><a class="dropdown-item fw-bold" href="job-board-catalog.html"><i class="fi-cart fs-base opacity-60 me-2"></i>Retail &amp; Shopping</a><a class="dropdown-item fw-bold" href="job-board-catalog.html"><i class="fi-cash fs-base opacity-60 me-2"></i>Finance</a></div>
          </div>
        </div>
      </div>
    </section>
    <!-- Post vacancy CTA-->

    <!-- Steps-->
    <section class="container pb-5 mb-md-3 mt-n2 mt-lg-0"> <div class="row g-2 g-xl-4"> <div class="col-lg-3 col-sm-6"> <div class="card card-body card-hover border-0 h-100"> <div class="fs-2 fw-bold text-primary lh-base mb-2">01</div> <h3 class="h5 mb-2">Signalez une fraude</h3> <p class="fs-sm mb-0">Signalez une fraude en ligne en remplissant notre formulaire détaillé pour aider notre communauté à rester en sécurité.</p> </div> </div> <div class="col-lg-3 col-sm-6"> <div class="card card-body card-hover border-0 h-100"> <div class="fs-2 fw-bold text-primary lh-base mb-2">02</div> <h3 class="h5 mb-2">Suivez l'évolution de votre signalement</h3> <p class="fs-sm mb-0">Suivez l'évolution de votre signalement en temps réel et recevez des mises à jour sur les mesures prises par notre équipe.</p> </div> </div> <div class="col-lg-3 col-sm-6"> <div class="card card-body card-hover border-0 h-100"> <div class="fs-2 fw-bold text-primary lh-base mb-2">03</div> <h3 class="h5 mb-2">Consultez les signalements précédents</h3> <p class="fs-sm mb-0">Consultez les signalements précédents pour rester informé des fraudes en ligne les plus récentes et des tendances émergentes.</p> </div> </div> <div class="col-lg-3 col-sm-6"> <div class="card card-body card-hover border-0 h-100"> <div class="fs-2 fw-bold text-primary lh-base mb-2">04</div> <h3 class="h5 mb-2">Restez en sécurité en ligne</h3> <p class="fs-sm mb-0">Restez informé des meilleures pratiques de sécurité en ligne pour protéger vos informations personnelles et financières.</p> </div> </div> </div> </section>
    <!-- Mobile app CTA-->

    <!-- Pricing-->

    <!-- Resumes by city-->
    <section class="container pb-5 mb-md-4">
      <div class="d-sm-flex align-items-center justify-content-between pb-4 mb-sm-2">
        <h2 class="h3 mb-sm-0">Resumes by city</h2><a class="btn btn-link fw-normal p-0" href="job-board-catalog.html">View all<i class="fi-arrow-long-right ms-2"></i></a>
      </div>
      <div class="tns-carousel-wrapper tns-controls-outside-xxl tns-nav-outside">
        <div class="tns-carousel-inner" data-carousel-options="{&quot;nav&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1, &quot;gutter&quot;: 16},&quot;420&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 16},&quot;700&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 20},&quot;850&quot;:{&quot;items&quot;:4, &quot;gutter&quot;: 20},&quot;1300&quot;:{&quot;nav&quot;: false, &quot;items&quot;:5, &quot;gutter&quot;: 24}}}">
          <div>
            <div class="position-relative">
              <div class="bg-secondary rounded-3 p-4 mb-3"><img class="d-block mx-auto" src="{{ asset('img/job-board/city/new-york.svg') }}" alt="New York"></div>
              <div class="text-center"><a class="nav-link stretched-link p-0" href="job-board-catalog.html">New York</a><span class="fs-xs">328 jobs</span></div>
            </div>
          </div>
          <div>
            <div class="position-relative">
              <div class="bg-secondary rounded-3 p-4 mb-3"><img class="d-block mx-auto" src="{{ asset('img/job-board/city/paris.sv') }}g" alt="Paris"></div>
              <div class="text-center"><a class="nav-link stretched-link p-0" href="job-board-catalog.html">Paris</a><span class="fs-xs">152 jobs</span></div>
            </div>
          </div>
          <div>
            <div class="position-relative">
              <div class="bg-secondary rounded-3 p-4 mb-3"><img class="d-block mx-auto" src="{{ asset('img/job-board/city/london.svg') }}" alt="London"></div>
              <div class="text-center"><a class="nav-link stretched-link p-0" href="job-board-catalog.html">London</a><span class="fs-xs">74 jobs</span></div>
            </div>
          </div>
          <div>
            <div class="position-relative">
              <div class="bg-secondary rounded-3 p-4 mb-3"><img class="d-block mx-auto" src="{{ asset('img/job-board/city/bangkok.svg') }}" alt="Bangkok"></div>
              <div class="text-center"><a class="nav-link stretched-link p-0" href="job-board-catalog.html">Bangkok</a><span class="fs-xs">92 jobs</span></div>
            </div>
          </div>
          <div>
            <div class="position-relative">
              <div class="bg-secondary rounded-3 p-4 mb-3"><img class="d-block mx-auto" src="img/job-board/city/barcelona.svg" alt="Barcelona"></div>
              <div class="text-center"><a class="nav-link stretched-link p-0" href="job-board-catalog.html">Barcelona</a><span class="fs-xs">204 jobs</span></div>
            </div>
          </div>
          <div>
            <div class="position-relative">
              <div class="bg-secondary rounded-3 p-4 mb-3"><img class="d-block mx-auto" src="img/job-board/city/dubai.svg" alt="Dubai"></div>
              <div class="text-center"><a class="nav-link stretched-link p-0" href="job-board-catalog.html">Dubai</a><span class="fs-xs">196 jobs</span></div>
            </div>
          </div>
          <div>
            <div class="position-relative">
              <div class="bg-secondary rounded-3 p-4 mb-3"><img class="d-block mx-auto" src="img/job-board/city/kuala-lumpur.svg" alt="Kuala Lumpur"></div>
              <div class="text-center"><a class="nav-link stretched-link p-0" href="job-board-catalog.html">Kuala Lumpur</a><span class="fs-xs">143 jobs</span></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Reviews-->

    <!-- CTA-->

  </main>

@endsection
