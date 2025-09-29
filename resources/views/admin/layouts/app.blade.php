<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>{{ config('app.name', 'Laravel') }} - @yield('title', 'Admin')</title>
        <link href="https://cdn.jsdelivr.net/npm/litepicker/dist/css/litepicker.css" rel="stylesheet" />
        <link href="{{ asset('template/css/styles.css') }}" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="{{ asset('template/assets/img/favicon.png') }}" />
        <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="nav-fixed">
        <nav class="topnav navbar navbar-expand shadow justify-content-between justify-content-sm-start navbar-light bg-white" id="sidenavAccordion">
            <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 me-2 ms-lg-2 me-lg-0" id="sidebarToggle"><i data-feather="menu"></i></button>
            <a class="navbar-brand pe-3 ps-4 ps-lg-2" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }} (Admin)</a>
            <form class="form-inline d-none d-lg-block me-3">
                <div class="input-group input-group-joined input-group-solid">
                    <input class="form-control pe-0" type="search" placeholder="Search" aria-label="Search" />
                    <div class="input-group-text"><i data-feather="search"></i></div>
                </div>
            </form>
            <ul class="navbar-nav align-items-center ms-auto">
                <li class="nav-item dropdown no-caret dropdown-user me-3 me-lg-4">
                    <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="img-fluid" src="{{ asset('template/assets/img/illustrations/profiles/profile-1.png') }}" alt="User avatar" />
                    </a>
                    <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
                        <h6 class="dropdown-header d-flex align-items-center">
                            <img class="dropdown-user-img" src="{{ asset('template/assets/img/illustrations/profiles/profile-1.png') }}" alt="User avatar" />
                            <div class="dropdown-user-details">
                                <div class="dropdown-user-details-name">{{ auth()->check() ? auth()->user()->name : 'Guest' }}</div>
                                <div class="dropdown-user-details-email">{{ auth()->check() ? auth()->user()->email : '' }}</div>
                            </div>
                        </h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <div class="dropdown-item-icon"><i data-feather="settings"></i></div>
                            Account
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="dropdown-item" type="submit">
                                <div class="dropdown-item-icon"><i data-feather="log-out"></i></div>
                                Logout
                            </button>
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sidenav shadow-right sidenav-light">
                    <div class="sidenav-menu">
                        <div class="nav accordion" id="accordionSidenav">
                            <div class="sidenav-menu-heading">Admin</div>
                            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                                <div class="nav-link-icon"><i data-feather="activity"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="#">
                                <div class="nav-link-icon"><i data-feather="users"></i></div>
                                User Management
                            </a>
                        </div>
                    </div>
                    <div class="sidenav-footer">
                        <div class="sidenav-footer-content">
                            <div class="sidenav-footer-subtitle">Logged in as:</div>
                            <div class="sidenav-footer-title">{{ auth()->check() ? auth()->user()->name : 'Guest' }}</div>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    @yield('content')
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('template/js/scripts.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/litepicker/dist/bundle.js" crossorigin="anonymous"></script>
        <script src="{{ asset('template/js/litepicker.js') }}"></script>

        <script>
        (function(){
            // Update the #current-local-time element to show the user's local time
            function updateLocalTime(){
                var el = document.getElementById('current-local-time');
                if (!el) return;
                var d = new Date();
                var opts = { weekday: 'long', month: 'long', day: 'numeric', year: 'numeric', hour: 'numeric', minute: '2-digit' };
                var formatter = new Intl.DateTimeFormat('{{ config('app.locale', 'en') }}', opts);
                var formatted = formatter.format(d);
                el.textContent = formatted;
            }
            updateLocalTime();
            // refresh every 30 seconds
            setInterval(updateLocalTime, 30000);
        })();
        </script>
    </body>
</html>

