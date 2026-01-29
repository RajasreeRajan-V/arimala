<div class="d-flex">

    <!-- Sidebar -->
    <aside class="sidebar bg-white shadow-sm">
        <div class="p-4 border-bottom">
            <h5 class="mb-0 fw-semibold text-heading">
                {{ config('app.name', 'Dashboard') }}
            </h5>
        </div>

        <ul class="nav flex-column p-3">
            <li class="nav-item mb-2">
                <a
                    href="{{ route('dashboard') }}"
                    class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}"
                >
                    Dashboard
                </a>
            </li>

            <li class="nav-item mb-2">
                <a href="#" class="nav-link">
                    Users
                </a>
            </li>

            <li class="nav-item mb-2">
                <a href="#" class="nav-link">
                    Careers
                </a>
            </li>

            <li class="nav-item mt-4">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="nav-link text-danger w-100 text-start border-0 bg-transparent">
                        Logout
                    </button>
                </form>
            </li>
        </ul>
    </aside>

    <!-- Main Content -->
    <div class="flex-grow-1 p-4">
        @yield('content')
    </div>

</div>
