<div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
        <div class="image">
            <img src="{{ \Illuminate\Support\Facades\Auth::user()->profile_photo_url }}" class="img-circle elevation-2 h--10 w--10" alt="{{ \Illuminate\Support\Facades\Auth::user()->name }}">
        </div>
        <div class="info">
            <a href="{{ route('profile.index') }}" class="d-block">{{ \Illuminate\Support\Facades\Auth::user()->name }}</a>
        </div>
    </div>

    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link {{ linkActiveClass('home') }}">
                    <i class="fas fa-home nav-icon"></i>
                    <p>Home</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('profile.index') }}" class="nav-link {{ linkActiveClass('profile') }}">
                    <i class="fas fa-user-alt nav-icon"></i>
                    <p>Profile</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('company.index') }}" class="nav-link {{ linkActiveClass('company') }}">
                    <i class="fas fa-building nav-icon"></i>
                    <p>Companies</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('remote.index') }}" class="nav-link {{ linkActiveClass('remote') }}">
                    <i class="fas fa-desktop nav-icon"></i>
                    <p>Remote</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <i class="nav-icon fas fa-power-off"></i>
                    <p>{{ __('Logout') }}</p>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </nav>
</div>
