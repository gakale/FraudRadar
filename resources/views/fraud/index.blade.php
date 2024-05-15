@extends('layouts.app')

@section('content')

<body class="bg-dark fixed-bottom-btn">

<main class="page-wrapper">

<div class="container mt-5 mb-md-4 py-5">
    <div class="row py-md-1">
      <!-- Filers sidebar (Offcanvas on mobile)-->

      <!-- Catalog list view-->
      <div class="col-lg-9">
        <!-- Breadcrumb-->
        <nav class="mb-3 pt-md-2 pt-lg-4" aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-light">
            <li class="breadcrumb-item"><a href="car-finder-home.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Fraude liste </li>
          </ol>
        </nav>
        <!-- Page title-->
        <div class="d-flex align-items-center justify-content-between pb-4 mb-2">
          <h1 class="text-light me-3 mb-0">Fraude Liste</h1>
          <div class="text-light"><i class="fi-car fs-lg me-2"></i><span class="align-middle">249 offers</span></div>
        </div>
        <!-- Sorting + View-->
        <div class="d-sm-flex align-items-center justify-content-between pb-4 mb-2">
          <div class="d-flex align-items-center me-sm-4">
            <label class="fs-sm text-light me-2 pe-1 text-nowrap" for="sorting1"><i class="fi-arrows-sort mt-n1 me-2"></i>Sort by:</label>
            <select class="form-select form-select-light form-select-sm me-sm-4" id="sorting1">
              <option>Newest</option>
              <option>Popular</option>
              <option>Price: Low - High</option>
              <option>Price: Hight - Low</option>
            </select>
            <div class="d-none d-md-block border-end border-light" style="height: 1.25rem;"></div>
            <div class="d-none d-sm-block fw-bold text-light opacity-70 text-nowrap ps-md-4"><i class="fi-switch-horizontal me-2"></i><span class="align-middle">Compare (0)</span></div>
          </div>
          <div class="d-none d-sm-flex"><a class="nav-link nav-link-light px-2 active" href="car-finder-catalog-list.html" data-bs-toggle="tooltip" title="List view"><i class="fi-list"></i></a><a class="nav-link nav-link-light px-2" href="car-finder-catalog-grid.html" data-bs-toggle="tooltip" title="Grid view"><i class="fi-grid"></i></a></div>
        </div>
        <!-- Item-->
        @livewire('fraud-list')

        <!-- Item-->

        <!-- Sorting + Pagination-->

      </div>
    </div>
    </div>
    </main>
</body>
@endsection
