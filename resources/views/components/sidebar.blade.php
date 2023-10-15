<aside class="sidebar-nav-wrapper">
    <div class="navbar-logo">
        <a href="{{ route('dashboard') }}">
            <img src="{{ asset('assets/images/logo/logo.svg') }}" alt="logo" />
        </a>
    </div>
    <nav class="sidebar-nav">
        <ul>
            <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}">
                    <span class="icon bx bx-home"></span>
                    <span class="text">Dashboard</span>
                </a>
            </li>

            @can('isAdmin')
                @include('components.menu-admin')
            @endcan

            @can('isMahasiswa')
                @include('components.menu-mahasiswa')
            @endcan

        </ul>
    </nav>
</aside>
