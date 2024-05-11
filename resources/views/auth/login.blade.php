<!DOCTYPE html>
<html lang="fr">

<!-- Mirrored from finder.createx.studio/signin-dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Apr 2024 15:07:30 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <title>Login - FraudRadar</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Finder - Directory &amp; Listings Bootstrap Template">
    <meta name="keywords" content="bootstrap, business, directory, listings, e-commerce, car dealer, city guide, real estate, job board, user account, multipurpose, ui kit, html5, css3, javascript, gallery, slider, touch">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#5bbad5" href="safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#766df4">
    <meta name="theme-color" content="#ffffff">
    <!-- Page loading styles-->
    <style>
      .page-loading {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        -webkit-transition: all .4s .2s ease-in-out;
        transition: all .4s .2s ease-in-out;
        background-color: #1f1b2d;
        opacity: 0;
        visibility: hidden;
        z-index: 9999;
      }
      .page-loading.active {
        opacity: 1;
        visibility: visible;
      }
      .page-loading-inner {
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        text-align: center;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        -webkit-transition: opacity .2s ease-in-out;
        transition: opacity .2s ease-in-out;
        opacity: 0;
      }
      .page-loading.active > .page-loading-inner {
        opacity: 1;
      }
      .page-loading-inner > span {
        display: block;
        font-size: 1rem;
        font-weight: normal;
        color: #fff;;
      }
      .page-spinner {
        display: inline-block;
        width: 2.75rem;
        height: 2.75rem;
        margin-bottom: .75rem;
        vertical-align: text-bottom;
        border: .15em solid #9691a4;
        border-right-color: transparent;
        border-radius: 50%;
        -webkit-animation: spinner .75s linear infinite;
        animation: spinner .75s linear infinite;
      }
      @-webkit-keyframes spinner {
        100% {
          -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }
      @keyframes spinner {
        100% {
          -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }

    </style>
    <!-- Page loading scripts-->
    <script>
      (function () {
        window.onload = function () {
          var preloader = document.querySelector('.page-loading');
          preloader.classList.remove('active');
          setTimeout(function () {
            preloader.remove();
          }, 2000);
        };
      })();

    </script>
    <!-- Vendor Styles-->
    <link rel="stylesheet" media="screen" href="{{ asset('vendor/simplebar/dist/simplebar.min.css') }}"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="{{ asset('css/theme.min.css') }}">
    <!-- Google Tag Manager-->
    <script>
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      '../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-WKV3GT5');
    </script>
  </head>
  <!-- Body-->
  <body class="bg-dark">
    <!-- Google Tag Manager (noscript)-->
    <noscript>
      <iframe src="http://www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
    </noscript>
    <!-- Demo switcher (offcanvas)-->
    <button class="btn btn-icon btn-light rounded-circle shadow position-fixed top-50 end-0 translate-middle-y me-3" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Choose Demo" style="z-index: 1035;"><span class="d-flex align-items-center justify-content-center position-absolute top-0 start-0 w-100 h-100 rounded-circle" data-bs-toggle="offcanvas" data-bs-target="#demo-switcher"><i class="fi-layers"></i></span></button>
    <div class="offcanvas offcanvas-end" id="demo-switcher">
      <div class="offcanvas-header d-block border-bottom">
        <div class="d-flex align-items-center justify-content-between mb-4">
          <h2 class="h5 mb-0">Choose Demo</h2>
          <button class="btn-close" type="button" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="d-flex"><a class="btn btn-outline-secondary btn-sm w-100 me-2" href="index-2.html"><i class="fi-home me-2"></i>Main Page</a><a class="btn btn-outline-secondary btn-sm w-100" href="components/typography.html"><i class="fi-file me-2"></i>Docs / UI Kit</a></div>
      </div>
      <div class="offcanvas-body">
        <div class="card card-hover shadow-sm mb-4"><img class="card-img-top" src="{{ asset('img/intro/demos/offcanvas/car-finder.jpg') }}" alt="Car Finder Demo">
          <div class="card-body p-3">
            <h3 class="fs-base card-title text-center"><a class="nav-link stretched-link" href="car-finder-home.html">Car Finder Demo</a></h3>
          </div>
        </div>
        <div class="card card-hover shadow-sm mb-4"><img class="card-img-top" src="{{ asset('img/intro/demos/offcanvas/real-estate.jpg') }}" alt="Real Estate Demo">
          <div class="card-body p-3">
            <h3 class="fs-base card-title text-center"><a class="nav-link stretched-link" href="real-estate-home-v1.html">Real Estate Demo</a></h3>
          </div>
        </div>
        <div class="card card-hover shadow-sm mb-4"><img class="card-img-top" src="{{ asset('img/intro/demos/offcanvas/job-board.jpg') }}" alt="Job Board Demo">
          <div class="card-body p-3">
            <h3 class="fs-base card-title text-center"><a class="nav-link stretched-link" href="job-board-home-v1.html">Job Board Demo</a></h3>
          </div>
        </div>
        <div class="card card-hover shadow-sm mb-4"><img class="card-img-top" src="{{ asset('img/intro/demos/offcanvas/city-guide.jpg') }}" alt="City Guide Demo">
          <div class="card-body p-3">
            <h3 class="fs-base card-title text-center"><a class="nav-link stretched-link" href="city-guide-home-v1.html">City Guide Demo</a></h3>
          </div>
        </div>
      </div>
      <div class="offcanvas-header border-top"><a class="btn btn-primary btn-lg w-100" href="https://themes.getbootstrap.com/product/finder-directory-listings-template-ui-kit/" target="_blank" rel="noopener"><i class="fi-cart fs-lg me-2"></i>Buy Finder</a></div>
    </div>
    <!-- Page loading spinner-->
    <div class="page-loading active">
      <div class="page-loading-inner">
        <div class="page-spinner"></div><span>Loading...</span>
      </div>
    </div>
    <main class="page-wrapper">
      <!-- Page content-->
      <div class="container-fluid d-flex h-100 align-items-center justify-content-center py-4 py-sm-5">
        <div class="card card-light card-body" style="max-width: 940px"><a class="position-absolute top-0 end-0 nav-link-light fs-sm py-1 px-2 mt-3 me-3" href="#" onclick="window.history.go(-1); return false;"><i class="fi-arrow-long-left fs-base me-2"></i>Go back</a>
          <div class="row mx-0 align-items-center">
            <div class="col-md-6 border-end-md border-light p-2 p-sm-5">
              <h2 class="h3 text-light mb-4 mb-sm-5">Hey there!<br>Welcome back.</h2><img class="d-block mx-auto" src="img/signin-modal/signin-dark.svg" width="344" alt="Illustartion">
              <div class="text-light mt-4 mt-sm-5"><span class="opacity-60">Don't have an account? </span><a class="text-light" href="{{ route('showRegistrationForm') }}">Sign up here</a></div>
            </div>
            <div class="col-md-6 px-2 pt-2 pb-4 px-sm-5 pb-sm-5 pt-md-5"><a class="btn btn-outline-info w-100 mb-3" href="#"><i class="fi-google fs-lg me-1"></i>Sign in with Google</a><a class="btn btn-outline-info w-100 mb-3" href="#"><i class="fi-facebook fs-lg me-1"></i>Sign in with Facebook</a>
              <div class="d-flex align-items-center py-3 mb-3">
                <hr class="hr-light w-100">
                <div class="text-light opacity-70 px-3">Or</div>
                <hr class="hr-light w-100">
              </div>
              @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
              <form class="needs-validation" method="POST" action="{{ route('login') }}" id="login-form">
                @csrf
                <div class="mb-4">
                    <label class="form-label text-light mb-2" for="signin-email">Email address</label>
                    <input class="form-control form-control-light {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" type="email" id="signin-email" placeholder="Enter your email" required>
                    @if ($errors->has('email'))
                        <div class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                </div>
                <div class="mb-4">
                  <div class="d-flex align-items-center justify-content-between mb-2">
                    <label class="form-label text-light mb-0" for="signin-password">Mot de passe</label><a class="fs-sm text-light" href="#">Forgot password?</a>
                  </div>
                  <div class="password-toggle">
                    <input class="form-control form-control-light {{ $errors->has('password') ? 'is-invalid' : '' }}" name="password" type="password" id="signin-password" placeholder="Enter password" required>
                    <label class="password-toggle-btn" aria-label="Show/hide password">
                      <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                    </label>
                  </div>
                    @if ($errors->has('password'))
                        <div class="invalid-feedback">
                            {{ $errors->first('password') }}
                        </div>
                    @endif
                </div>
                <input class="btn btn-primary btn-lg w-100" type="submit" value="Se connectez">
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Back to top button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon fi-chevron-up">   </i></a>
    <!-- Vendor scrits: js libraries and plugins-->
    <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Main theme script-->
    <script src="{{ asset('js/theme.min.js') }}"></script>

</body>


<!-- Mirrored from finder.createx.studio/signin-dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Apr 2024 15:07:30 GMT -->
</html>
