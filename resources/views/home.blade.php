@extends('layouts.app')

@section('content')

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

    <div class="container mt-4 mt-sm-3 mt-lg-n3 pb-5 mb-md-4">
        <!-- Tabs-->
        <ul class="nav nav-tabs nav-tabs-light mb-4">
            <li class="nav-item">
                <a class="nav-link active" href="#">New</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Used</a>
            </li>
        </ul>
        <!-- Form group-->
        <form class="form-group form-group-light d-block">
            <div class="row g-0 ms-lg-n2">
                <div class="col-lg-2">
                    <div
                        class="input-group border-end-lg border-light"
                    >
                        <span
                            class="input-group-text text-muted ps-2 ps-sm-3"
                            ><i class="fi-search"></i
                        ></span>
                        <input
                            class="form-control"
                            type="text"
                            name="keywords"
                            placeholder="Keywords..."
                        />
                    </div>
                </div>
                <hr class="hr-light d-lg-none my-2" />
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div
                        class="dropdown border-end-sm border-light"
                        data-bs-toggle="select"
                    >
                        <button
                            class="btn btn-link dropdown-toggle ps-2 ps-sm-3"
                            type="button"
                            data-bs-toggle="dropdown"
                        >
                            <i class="fi-list me-2"></i
                            ><span class="dropdown-toggle-label"
                                >Make</span
                            >
                        </button>
                        <input type="hidden" name="make" />
                        <ul
                            class="dropdown-menu dropdown-menu-dark"
                        >
                            <li>
                                <a class="dropdown-item" href="#"
                                    ><span
                                        class="dropdown-item-label"
                                        >Acura</span
                                    ></a
                                >
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"
                                    ><span
                                        class="dropdown-item-label"
                                        >BMW</span
                                    ></a
                                >
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"
                                    ><span
                                        class="dropdown-item-label"
                                        >Citroen</span
                                    ></a
                                >
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"
                                    ><span
                                        class="dropdown-item-label"
                                        >Lexus</span
                                    ></a
                                >
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"
                                    ><span
                                        class="dropdown-item-label"
                                        >Mercedes-Benz</span
                                    ></a
                                >
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"
                                    ><span
                                        class="dropdown-item-label"
                                        >Nissan</span
                                    ></a
                                >
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"
                                    ><span
                                        class="dropdown-item-label"
                                        >Toyota</span
                                    ></a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
                <hr class="hr-light d-sm-none my-2" />
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div
                        class="dropdown border-end-md border-light"
                        data-bs-toggle="select"
                    >
                        <button
                            class="btn btn-link dropdown-toggle ps-2 ps-sm-3"
                            type="button"
                            data-bs-toggle="dropdown"
                        >
                            <i class="fi-list me-2"></i
                            ><span class="dropdown-toggle-label"
                                >Model</span
                            >
                        </button>
                        <input type="hidden" name="model" />
                        <ul
                            class="dropdown-menu dropdown-menu-dark"
                        >
                            <li>
                                <a class="dropdown-item" href="#"
                                    ><span
                                        class="dropdown-item-label"
                                        >Altima</span
                                    ></a
                                >
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"
                                    ><span
                                        class="dropdown-item-label"
                                        >Juke</span
                                    ></a
                                >
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"
                                    ><span
                                        class="dropdown-item-label"
                                        >Leaf</span
                                    ></a
                                >
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"
                                    ><span
                                        class="dropdown-item-label"
                                        >Maxima</span
                                    ></a
                                >
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"
                                    ><span
                                        class="dropdown-item-label"
                                        >Micra</span
                                    ></a
                                >
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"
                                    ><span
                                        class="dropdown-item-label"
                                        >Murano</span
                                    ></a
                                >
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"
                                    ><span
                                        class="dropdown-item-label"
                                        >Note</span
                                    ></a
                                >
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"
                                    ><span
                                        class="dropdown-item-label"
                                        >Patrol</span
                                    ></a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
                <hr class="hr-light d-md-none my-2" />
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div
                        class="dropdown border-end-sm border-light"
                        data-bs-toggle="select"
                    >
                        <button
                            class="btn btn-link dropdown-toggle ps-2 ps-sm-3"
                            type="button"
                            data-bs-toggle="dropdown"
                        >
                            <i class="fi-car fs-lg me-2"></i
                            ><span class="dropdown-toggle-label"
                                >Body type</span
                            >
                        </button>
                        <input type="hidden" name="type" />
                        <ul
                            class="dropdown-menu dropdown-menu-dark"
                        >
                            <li>
                                <a class="dropdown-item" href="#"
                                    ><span
                                        class="dropdown-item-label"
                                        >Compact</span
                                    ></a
                                >
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"
                                    ><span
                                        class="dropdown-item-label"
                                        >Crossover</span
                                    ></a
                                >
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"
                                    ><span
                                        class="dropdown-item-label"
                                        >Coupe</span
                                    ></a
                                >
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"
                                    ><span
                                        class="dropdown-item-label"
                                        >Family MPV</span
                                    ></a
                                >
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"
                                    ><span
                                        class="dropdown-item-label"
                                        >Pickup</span
                                    ></a
                                >
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"
                                    ><span
                                        class="dropdown-item-label"
                                        >Sedan</span
                                    ></a
                                >
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"
                                    ><span
                                        class="dropdown-item-label"
                                        >SUV</span
                                    ></a
                                >
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"
                                    ><span
                                        class="dropdown-item-label"
                                        >Wagon</span
                                    ></a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
                <hr class="hr-light d-sm-none my-2" />
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="dropdown" data-bs-toggle="select">
                        <button
                            class="btn btn-link dropdown-toggle ps-2 ps-sm-3"
                            type="button"
                            data-bs-toggle="dropdown"
                        >
                            <i class="fi-map-pin me-2"></i
                            ><span class="dropdown-toggle-label"
                                >Location</span
                            >
                        </button>
                        <input type="hidden" name="location" />
                        <ul
                            class="dropdown-menu dropdown-menu-dark"
                        >
                            <li>
                                <a class="dropdown-item" href="#"
                                    ><span
                                        class="dropdown-item-label"
                                        >Dallas</span
                                    ></a
                                >
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"
                                    ><span
                                        class="dropdown-item-label"
                                        >Chicago</span
                                    ></a
                                >
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"
                                    ><span
                                        class="dropdown-item-label"
                                        >Houston</span
                                    ></a
                                >
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"
                                    ><span
                                        class="dropdown-item-label"
                                        >Las Vegas</span
                                    ></a
                                >
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"
                                    ><span
                                        class="dropdown-item-label"
                                        >Los Angeles</span
                                    ></a
                                >
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"
                                    ><span
                                        class="dropdown-item-label"
                                        >New York</span
                                    ></a
                                >
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"
                                    ><span
                                        class="dropdown-item-label"
                                        >San Francisco</span
                                    ></a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
                <hr class="hr-light d-lg-none my-2" />
                <div class="col-lg-2">
                    <button
                        class="btn btn-primary w-100"
                        type="submit"
                    >
                        Search
                    </button>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- Body type selection-->

    <section class="container pb-4 pb-sm-5 mb-2 mb-md-4">
        <div
            class="d-sm-flex align-items-center justify-content-between mb-3 mb-sm-4 pb-sm-2"
        >
            <h2 class="h3 text-light mb-2 mb-sm-0">Latest news</h2>
            <a
                class="btn btn-link btn-light fw-normal px-0"
                href="car-finder-blog.html"
                >Go to blog<i
                    class="fi-arrow-long-right fs-sm mt-0 ps-1 ms-2"
                ></i
            ></a>
        </div>
        <div
            class="tns-carousel-wrapper tns-nav-outside tns-carousel-light"
        >
            <div
                class="tns-carousel-inner"
                data-carousel-options='{"items": 3, "controls": false, "responsive": {"0":{"items":1, "gutter": 16},"500":{"items":2, "gutter": 18},"900":{"items":3, "gutter": 20}, "1100":{"gutter": 24}}}'
            >
                <div>
                    <article>
                        <a
                            class="d-block rounded-3 overflow-hidden"
                            href="car-finder-blog-single.html"
                            ><img
                                class="d-block"
                                src="{{ asset('img/car-finder/blog/04.jpg') }}"
                                alt="Image"
                        /></a>
                        <div class="py-3">
                            <a
                                class="fs-xs text-uppercase text-decoration-none"
                                href="#"
                                >Events</a
                            >
                            <h3 class="text-light fs-base pt-1">
                                <a
                                    class="nav-link"
                                    href="car-finder-blog-single.html"
                                    >Top 10 Classic Car Events</a
                                >
                            </h3>
                            <a
                                class="d-flex align-items-center text-decoration-none"
                                href="#"
                                ><img
                                    class="rounded-circle"
                                    src="{{ asset('img/avatars/08.jpg') }}"
                                    width="44"
                                    alt="Avatar"
                                />
                                <div class="ps-2">
                                    <h6
                                        class="fs-sm text-light lh-base mb-1"
                                    >
                                        Jacob Jones
                                    </h6>
                                    <div
                                        class="d-flex fs-xs text-light opacity-60"
                                    >
                                        <span class="me-2 pe-1"
                                            ><i
                                                class="fi-calendar-alt me-1"
                                            ></i
                                            >May 8</span
                                        ><span
                                            ><i
                                                class="fi-chat-circle me-1"
                                            ></i
                                            >No comments</span
                                        >
                                    </div>
                                </div></a
                            >
                        </div>
                    </article>
                </div>
                <div>
                    <article>
                        <a
                            class="d-block rounded-3 overflow-hidden"
                            href="car-finder-blog-single.html"
                            ><img
                                class="d-block"
                                src="{{ asset('img/car-finder/blog/05.jpg') }}"
                                alt="Image"
                        /></a>
                        <div class="py-3">
                            <a
                                class="fs-xs text-uppercase text-decoration-none"
                                href="#"
                                >Inspiration</a
                            >
                            <h3 class="text-light fs-base pt-1">
                                <a
                                    class="nav-link"
                                    href="car-finder-blog-single.html"
                                    >5 Predictions From the Past About
                                    the Future</a
                                >
                            </h3>
                            <a
                                class="d-flex align-items-center text-decoration-none"
                                href="#"
                                ><img
                                    class="rounded-circle"
                                    src="{{ asset('img/avatars/09.jpg') }}"
                                    width="44"
                                    alt="Avatar"
                                />
                                <div class="ps-2">
                                    <h6
                                        class="fs-sm text-light lh-base mb-1"
                                    >
                                        Guy Hawkins
                                    </h6>
                                    <div
                                        class="d-flex fs-xs text-light opacity-60"
                                    >
                                        <span class="me-2 pe-1"
                                            ><i
                                                class="fi-calendar-alt me-1"
                                            ></i
                                            >Apr 25</span
                                        ><span
                                            ><i
                                                class="fi-chat-circle me-1"
                                            ></i
                                            >6 comments</span
                                        >
                                    </div>
                                </div></a
                            >
                        </div>
                    </article>
                </div>
                <div>
                    <article>
                        <a
                            class="d-block rounded-3 overflow-hidden"
                            href="car-finder-blog-single.html"
                            ><img
                                class="d-block"
                                src="{{ asset('img/car-finder/blog/06.jpg') }}"
                                alt="Image"
                        /></a>
                        <div class="py-3">
                            <a
                                class="fs-xs text-uppercase text-decoration-none"
                                href="#"
                                >Test Drives</a
                            >
                            <h3 class="text-light fs-base pt-1">
                                <a
                                    class="nav-link"
                                    href="car-finder-blog-single.html"
                                    >This Year is All About New Harley
                                    Davidson</a
                                >
                            </h3>
                            <a
                                class="d-flex align-items-center text-decoration-none"
                                href="#"
                                ><img
                                    class="rounded-circle"
                                    src="{{ asset('img/avatars/12.jpg') }}"
                                    width="44"
                                    alt="Avatar"
                                />
                                <div class="ps-2">
                                    <h6
                                        class="fs-sm text-light lh-base mb-1"
                                    >
                                        Ralph Edwards
                                    </h6>
                                    <div
                                        class="d-flex fs-xs text-light opacity-60"
                                    >
                                        <span class="me-2 pe-1"
                                            ><i
                                                class="fi-calendar-alt me-1"
                                            ></i
                                            >Mar 12</span
                                        ><span
                                            ><i
                                                class="fi-chat-circle me-1"
                                            ></i
                                            >2 comments</span
                                        >
                                    </div>
                                </div></a
                            >
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

</main>

@endsection
