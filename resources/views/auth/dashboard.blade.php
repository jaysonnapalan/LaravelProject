@extends('layouts.navigation.index')

@section('content')

<!-- Favicon -->
<link rel="icon" type="image/x-icon" href="../assets/img/favicon/slsu.png" />

<!-- App css -->
<!-- <link href="public/Silva-Admin/dist/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" /> -->

<!-- Icons -->
<!-- <link href="public/Silva-Admin/dist/assets/css/icons.min.css" rel="stylesheet" type="text/css" /> -->

<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row">
    <div class="col-lg-8 mb-4 order-0">
      <div class="card">
        <div class="d-flex align-items-end row">
          <div class="col-sm-7">
            <div class="card-body">
            <h5 class="card-title text-primary">Welcome to SLSU - Bontoc Campus, {{ Auth::user()->name }}!👋</h5>
            <p class="mb-4">
                Sports Registration System Applications for Mighty Kingfishers - Bontoc Campus Students
            </p>
              <a href="javascript:;" class="btn btn-sm btn-outline-primary">VIEW ALL SPORTS</a>
            </div>
          </div>
          <div class="col-sm-5 text-center text-sm-left">
            <div class="card-body pb-0 px-0 px-md-4">
              <img src="../assets/img/illustrations/college students.gif" height="175" alt="View Badge User" data-app-dark-img="illustrations/baseball-player.png" data-app-light-img="illustrations/baseball-player.png">
            </div>
          </div>
        </div>
      </div>

      <!-- Image Slider -->
      <link rel="stylesheet" href="../assets/slider/styles.css">
      <div class="slider-container mt-4">
      <div class="slider">
        <img src="../assets/img/backgrounds/1.png" alt="Slide 1">
        <img src="../assets/img/backgrounds/2.jpg" alt="Slide 2">
        <img src="../assets/img/backgrounds/3.webp" alt="Slide 3">
        <img src="../assets/img/backgrounds/4.jpg" alt="Slide 4">
        <img src="../assets/img/backgrounds/5.jpg" alt="Slide 5">
      </div>
    </div>

    <!-- Dots Navigation -->
    <div class="dots-container">
      <span class="dot" data-slide="0"></span>
      <span class="dot" data-slide="1"></span>
      <span class="dot" data-slide="2"></span>
      <span class="dot" data-slide="3"></span>
      <span class="dot" data-slide="4"></span>
    </div>
      <script src="../assets/slider/script.js"></script>
    </div>
    
    <div class="col-lg-4 col-md-4 order-1">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-6 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="card-title d-flex align-items-start justify-content-between">
                <div class="avatar flex-shrink-0">
                  <img src="../assets/img/icons/flaticons/baseball.gif" alt="chart success" class="rounded">
                </div>
                <div class="dropdown">
                  <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                    <a class="dropdown-item" href="javascript:void(0);">View More</a>
                    <a class="dropdown-item" href="javascript:void(0);">Add Athlete</a>
                  </div>
                </div>
              </div>
              <span class="fw-semibold d-block mb-1">Baseball</span>
              <!-- <h3 class="card-title mb-2">$12,628</h3>
              <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small> -->
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-6 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="card-title d-flex align-items-start justify-content-between">
                <div class="avatar flex-shrink-0">
                  <img src="../assets/img/icons/flaticons/volleyball.gif" alt="chart success" class="rounded">
                </div>
                <div class="dropdown">
                  <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                    <a class="dropdown-item" href="javascript:void(0);">View More</a>
                    <a class="dropdown-item" href="javascript:void(0);">Add Athlete</a>
                  </div>
                </div>
              </div>
              <span class="fw-semibold d-block mb-1">Volleyball</span>
              <!-- <h3 class="card-title mb-2">$12,628</h3>
              <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small> -->
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-6 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="card-title d-flex align-items-start justify-content-between">
                <div class="avatar flex-shrink-0">
                  <img src="../assets/img/icons/flaticons/badminton.gif" alt="chart success" class="rounded">
                </div>
                <div class="dropdown">
                  <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                    <a class="dropdown-item" href="javascript:void(0);">View More</a>
                    <a class="dropdown-item" href="javascript:void(0);">Add Athlete</a>
                  </div>
                </div>
              </div>
              <span class="fw-semibold d-block mb-1">Badminton</span>
              <!-- <h3 class="card-title mb-2">$12,628</h3>
              <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small> -->
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-6 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="card-title d-flex align-items-start justify-content-between">
                <div class="avatar flex-shrink-0">
                  <img src="../assets/img/icons/flaticons/basketball.gif" alt="chart success" class="rounded">
                </div>
                <div class="dropdown">
                  <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                    <a class="dropdown-item" href="javascript:void(0);">View More</a>
                    <a class="dropdown-item" href="javascript:void(0);">Add Athlete</a>
                  </div>
                </div>
              </div>
              <span class="fw-semibold d-block mb-1">Basketball</span>
              <!-- <h3 class="card-title mb-2">$12,628</h3>
              <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small> -->
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-6 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="card-title d-flex align-items-start justify-content-between">
                <div class="avatar flex-shrink-0">
                  <img src="../assets/img/icons/flaticons/swim.gif" alt="chart success" class="rounded">
                </div>
                <div class="dropdown">
                  <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                    <a class="dropdown-item" href="javascript:void(0);">View More</a>
                    <a class="dropdown-item" href="javascript:void(0);">Add Athlete</a>
                  </div>
                </div>
              </div>
              <span class="fw-semibold d-block mb-1">Swimming</span>
              <!-- <h3 class="card-title mb-2">$12,628</h3>
              <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small> -->
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-6 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="card-title d-flex align-items-start justify-content-between">
                <div class="avatar flex-shrink-0">
                  <img src="../assets/img/icons/flaticons/shot put.gif" alt="chart success" class="rounded">
                </div>
                <div class="dropdown">
                  <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                    <a class="dropdown-item" href="javascript:void(0);">View More</a>
                    <a class="dropdown-item" href="javascript:void(0);">Add Athlete</a>
                  </div>
                </div>
              </div>
              <span class="fw-semibold d-block mb-1">Shot Put</span>
              <!-- <h3 class="card-title mb-2">$12,628</h3>
              <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small> -->
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-6 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="card-title d-flex align-items-start justify-content-between">
                <div class="avatar flex-shrink-0">
                  <img src="../assets/img/icons/flaticons/relay race.gif" alt="chart success" class="rounded">
                </div>
                <div class="dropdown">
                  <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                    <a class="dropdown-item" href="javascript:void(0);">View More</a>
                    <a class="dropdown-item" href="javascript:void(0);">Add Athlete</a>
                  </div>
                </div>
              </div>
              <span class="fw-semibold d-block mb-1">Runs</span>
              <!-- <h3 class="card-title mb-2">$12,628</h3>
              <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small> -->
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-6 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="card-title d-flex align-items-start justify-content-between">
                <div class="avatar flex-shrink-0">
                  <img src="../assets/img/icons/flaticons/javelin throw.gif" alt="chart success" class="rounded">
                </div>
                <div class="dropdown">
                  <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                    <a class="dropdown-item" href="javascript:void(0);">View More</a>
                    <a class="dropdown-item" href="javascript:void(0);">Add Athlete</a>
                  </div>
                </div>
              </div>
              <span class="fw-semibold d-block mb-1">Javelin Throw</span>
              <!-- <h3 class="card-title mb-2">$12,628</h3>
              <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    <!-- Footer -->
    <footer class="content-footer footer bg-footer-theme">
        <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
            <div class="mb-2 mb-md-0">
                ©
              <script>document.write(new Date().getFullYear())</script>,</script>
                Crafted with ❤️ by
            <a href="pages-misc-under-maintenance.html" target="_blank" class="footer-link fw-medium">Napalan, Jayson</a>
            </div>
        <div class="d-none d-lg-inline-block">
            <a href="pages-misc-under-maintenance.html" class="footer-link me-4" target="_blank">Terms &amp; Conditions</a>
            <a href="pages-misc-under-maintenance.html" target="_blank" class="footer-link me-4">Suggestions</a>
            <a href="pages-misc-under-maintenance.html" target="_blank" class="footer-link me-4">Documentation</a>
            <a href="pages-misc-under-maintenance.html" target="_blank" class="footer-link">Support</a>
        </div>
      </div>
    </footer>
    <!-- / Footer -->
    <!-- Footer Start -->
    <!-- <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col fs-13 text-muted text-center">
                &copy; <script>document.write(new Date().getFullYear())</script> - Made with ❤️ by <a href="#!" class="text-reset fw-semibold">Jayson Napalan</a> 
            </div>
        </div>
    </div>
</footer> -->
<!-- end Footer -->
@endsection