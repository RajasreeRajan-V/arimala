<nav class="navbar navbar-expand-lg bg-white shadow-sm px-4">
    <div class="container-fluid">

        <!-- Brand with Logo -->
        <a class="navbar-brand fw-semibold d-flex align-items-center gap-2"
           href="{{ route('admin.dashboard') }}">

            <img src="{{ asset('img/back-logo.png') }}"
                 alt="Arimala Hospital Logo"
                 height="40">

            <div class="d-flex flex-column lh-1">
                <span class="fw-bold">Arimala Hospital</span>
                <small class="text-muted">Admin Panel</small>
            </div>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">

            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"
                       href="{{ route('admin.dashboard') }}">
                        Dashboard
                    </a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
                        {{ Auth::user()->name }}
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="dropdown-item text-danger">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
    </div>
</nav>
