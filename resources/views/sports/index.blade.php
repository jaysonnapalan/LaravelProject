@extends('layouts.app') <!-- Use your main layout -->

@section('content')
<div class="container mt-2">
    <h4 class="mb-3">Sports Section</h4>
    <p>This section contains a list of all available sports and their details. You can explore and manage sports-related activities here.</p>
</div>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4"> <!-- Adjusted for responsiveness -->
        <!-- Baseball -->
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="../assets/img/icons/flaticons/baseball.gif" alt="Baseball" class="rounded">
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="javascript:void(0);">View Info</a>
                                <a class="dropdown-item" href="{{ route('sports.register', 'baseball') }}">Register</a>
                            </div>
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Baseball</span>
                </div>
            </div>
        </div>

        <!-- Volleyball -->
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="../assets/img/icons/flaticons/volleyball.gif" alt="Volleyball" class="rounded">
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="javascript:void(0);">View Info</a>
                                <a class="dropdown-item" href="{{ route('sports.register', 'volleyball') }}">Register</a>
                            </div>
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Volleyball</span>
                </div>
            </div>
        </div>

        <!-- Badminton -->
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="../assets/img/icons/flaticons/badminton.gif" alt="Badminton" class="rounded">
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="javascript:void(0);">View Info</a>
                                <a class="dropdown-item" href="{{ route('sports.register', 'badminton') }}">Register</a>
                            </div>
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Badminton</span>
                </div>
            </div>
        </div>

        <!-- Basketball -->
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="../assets/img/icons/flaticons/basketball.gif" alt="Basketball" class="rounded">
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="javascript:void(0);">View Info</a>
                                <a class="dropdown-item" href="{{ route('sports.register', 'basketball') }}">Register</a>
                            </div>
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Basketball</span>
                </div>
            </div>
        </div>

        <!-- Swimming -->
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="../assets/img/icons/flaticons/swim.gif" alt="swimming" class="rounded">
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="javascript:void(0);">View Info</a>
                                <a class="dropdown-item" href="{{ route('sports.register', 'swimming') }}">Register</a>
                            </div>
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Swimming</span>
                </div>
            </div>
        </div>

        <!-- Shot Put -->
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="../assets/img/icons/flaticons/shot put.gif" alt="shotput" class="rounded">
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="javascript:void(0);">View Info</a>
                                <a class="dropdown-item" href="{{ route('sports.register', 'shot put') }}">Register</a>
                            </div>
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Shot Put</span>
                </div>
            </div>
        </div>
        <!-- Runs -->
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="../assets/img/icons/flaticons/relay race.gif" alt="runs" class="rounded">
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="javascript:void(0);">View Info</a>
                                <a class="dropdown-item" href="{{ route('sports.register', 'runs') }}">Register</a>
                            </div>
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Runs</span>
                </div>
            </div>
        </div>
        <!-- Javelin Throw -->
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="../assets/img/icons/flaticons/javelin throw.gif" alt="javelin throw" class="rounded">
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="javascript:void(0);">View Info</a>
                                <a class="dropdown-item" href="{{ route('sports.register', 'javelin throw') }}">Register</a>
                            </div>
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Javelin Throw</span>
                </div>
            </div>
        </div>
        <!-- Jumps -->
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="../assets/img/icons/flaticons/badminton.gif" alt="Badminton" class="rounded">
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="javascript:void(0);">View Info</a>
                                <a class="dropdown-item" href="{{ route('sports.register', 'badminton') }}">Register</a>
                            </div>
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Jumps</span>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="../assets/img/icons/flaticons/badminton.gif" alt="Badminton" class="rounded">
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="javascript:void(0);">View Info</a>
                                <a class="dropdown-item" href="{{ route('sports.register', 'badminton') }}">Register</a>
                            </div>
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Badminton</span>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="../assets/img/icons/flaticons/badminton.gif" alt="Badminton" class="rounded">
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="javascript:void(0);">View Info</a>
                                <a class="dropdown-item" href="{{ route('sports.register', 'badminton') }}">Register</a>
                            </div>
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Badminton</span>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="../assets/img/icons/flaticons/badminton.gif" alt="Badminton" class="rounded">
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="javascript:void(0);">View Info</a>
                                <a class="dropdown-item" href="{{ route('sports.register', 'badminton') }}">Register</a>
                            </div>
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Badminton</span>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="../assets/img/icons/flaticons/badminton.gif" alt="Badminton" class="rounded">
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="javascript:void(0);">View Info</a>
                                <a class="dropdown-item" href="{{ route('sports.register', 'badminton') }}">Register</a>
                            </div>
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Badminton</span>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="../assets/img/icons/flaticons/badminton.gif" alt="Badminton" class="rounded">
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="javascript:void(0);">View Info</a>
                                <a class="dropdown-item" href="{{ route('sports.register', 'badminton') }}">Register</a>
                            </div>
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Badminton</span>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="../assets/img/icons/flaticons/badminton.gif" alt="Badminton" class="rounded">
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="javascript:void(0);">View Info</a>
                                <a class="dropdown-item" href="{{ route('sports.register', 'badminton') }}">Register</a>
                            </div>
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Badminton</span>
                </div>
            </div>
        </div>

        <!-- Add similar blocks for Basketball, Swimming, Shot Put, Runs, and Javelin Throw -->

    </div>
</div>

<!-- Footer -->
<footer class="content-footer footer bg-footer-theme">
  <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
    <div class="mb-2 mb-md-0">
      ©
      <script>
        document.write(new Date().getFullYear())
      </script>,</script>
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
@endsection
