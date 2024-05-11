@extends('layouts.app')
@section('content')
<link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />



    <!-- Body-->
    <body class="bg-dark">
        <!-- Google Tag Manager (noscript)-->
        <noscript>
            <iframe
                src="http://www.googletagmanager.com/ns.html?id=GTM-WKV3GT5"
                height="0"
                width="0"
                style="display: none; visibility: hidden"
            ></iframe>
        </noscript>
        <!-- Demo switcher (offcanvas)-->


        <!-- Page loading spinner-->
        <div class="page-loading active">
            <div class="page-loading-inner">
                <div class="page-spinner"></div>
                <span>Loading...</span>
            </div>
        </div>
        <main class="page-wrapper">
            <!-- Navbar-->

            <!-- Page content-->
            <!-- Preview modal-->

            <!-- Page container-->



                <div class="container mt-5 mb-md-4 py-5">
                  <div class="row">
                    <!-- Page content-->
                    <div class="col-lg-8">
                      <!-- Breadcrumb-->
                      <nav class="mb-3 pt-md-3" aria-label="Breadcrumb">
                        <ol class="breadcrumb breadcrumb-light">
                          <li class="breadcrumb-item">
                            <a href="{{ route('home') }}">Home</a>
                          </li>
                          <li class="breadcrumb-item active" aria-current="page">
                            Signalez une Fraude
                          </li>
                        </ol>
                      </nav>
                      <!-- Title-->
                      <div class="mb-4">
                        <h1 class="h2 text-light mb-0">
                          Signaler Fraude
                        </h1>
                        <div class="d-lg-none text-light pt-3 mb-2">
                          80% content filled
                        </div>
                        <div class="progress progress-light d-lg-none mb-4" style="height: 0.25rem">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                      <!-- Basic info-->
                      <section class="card card-light card-body border-0 shadow-sm p-4 mb-4" id="basic-info">
                        <h2 class="h4 text-light mb-4">
                          <i class="fi-info-circle text-primary fs-5 mt-n1 me-2"></i>Racontez nous votre histoire
                        </h2>
                        <form action="{{ route('fraud.store') }}" method="POST" enctype="multipart/form-data">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                            @csrf
                            <div class="mb-3">
                            <label class="form-label text-light" for="name">Nom de  <span class="text-danger">*</span></label>
                            <input class="form-control form-control-light" type="text" id="name" name="name" placeholder="Enter name" name="name" required>
                            </div>
                            <div class="mb-3" required>
                                <label class="form-label text-light" for="description">Description  <span class="text-danger">*</span></label>
                                <textarea class="form-control form-control-light" id="description" name="description" rows="3" placeholder="Enter description"></textarea>
                            </div>

                            <div class="mb-3">
                            <label class="form-label text-light" for="category_id">Categorie <span class="text-danger">*</span></label>
                            <select class="form-select form-select-light" id="category_id" name="category_id" >
                                <option value="" disabled selected>Select category</option>
                                <!-- Populate options with categories from your database -->
                            </select>
                            </div>
                            <div class="mb-3">
                            <label class="form-label text-light" for="image">Image</label>
                            <input name="image" class="file-uploader file-uploader-grid" type="file" multiple data-max-files="4" data-max-file-size="8MB" accept="image/png, image/jpeg" data-label-idle='<div class="btn btn-primary mb-3"><i class="fi-cloud-upload me-1"></i>Upload photos</div><div>or drag them in</div>'>
                            </div>
                            <div class="mb-3">
                            <label class="form-label text-light" for="tags">Tags</label>
                            <input class="form-control form-control-light" type="text" id="tags" name="tags" placeholder="Enter tags" >
                            </div>
                            <div class="mb-3">
                            <label class="form-label text-light" for="video">Video</label>
                            <input class="form-control form-control-light" type="text" id="video" name="video" placeholder="Enter video URL">
                            </div>
                            <div class="mb-3">
                            <label class="form-label text-light" for="url">URL</label>
                            <input class="form-control form-control-light" type="text" id="url" name="url" placeholder="Enter URL">
                            </div>
                            <div class="d-flex justify-content-end">
                                <input type="submit" class="btn btn-primary" value="raconter nous">
                              </div>
                            </div>
                    </form>

                      </section>
                      <!-- Submit button -->

                    <!-- Progress of completion-->
                    <aside class="col-lg-3 offset-lg-1 d-none d-lg-block">
                      <div class="sticky-top pt-5">
                        <h6 class="text-light pt-5 mt-3 mb-2">
                          80% content filled
                        </h6>
                        <div class="progress progress-light mb-4" style="height: 0.25rem">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <ul class="list-unstyled">
                          <li class="d-flex align-items-center">
                            <i class="fi-check text-primary me-2"></i
                            ><a class="nav-link-light ps-1" href="#basic-info" data-scroll data-scroll-offset="20">Basic info</a>
                          </li>
                        </ul>
                      </div>
                    </aside>
                  </div>
                </div>

                    <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
                    <script src="https://cdn.tiny.cloud/1/edwb63samrzjgaj433bbhw3t66mqbfov3xtupt3e4aczjmw6/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

                    <script>

                // Get a reference to the file input element
                    const inputElement = document.querySelector('input[type="file"]');

                    // Create a FilePond instance
                    const pond = FilePond.create(inputElement);
                        FilePond.setOptions({
                        server:{
                            process: '/tmp-upload',
                            revert: '/tmp-delete',
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            }
                        },
                    });
                 </script>
        <script>
                tinymce.init({
                selector: 'textarea',
                plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount linkchecker',
                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
                });
        </script>
    </main>

</body>
        <!-- Footer-->

@endsection
