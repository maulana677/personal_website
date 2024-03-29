<div class="navbar-bg"></div>
{{--  <nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                        class="fas fa-search"></i></a></li>
        </ul>
    </form>
    <ul class="navbar-nav navbar-right w-100-p justify-content-end">
        <li class="nav-link">
            <a href="{{ route('home') }}" target="_blank" class="btn btn-warning">Front End</a>
        </li>
        <li class="nav-item dropdown">

            <a class="nav-link dropdown-toggle nav-link-lg nav-link-user" href="#" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                <img alt="image" src="{{ asset('uploads/' . Auth::guard('admin')->user()->photo) }}"
                    class="rounded-circle mr-1">
                <div class="d-sm-none d-lg-inline-block">{{ Auth::guard('admin')->user()->name }}</div>
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('admin_profile') }}"><i class="far fa-user"></i> Edit
                        Profile</a></li>
                <li><a class="dropdown-item" href="{{ route('admin_logout') }}"><i class="fas fa-sign-out-alt"></i>
                        Logout</a></li>
            </ul>
        </li>
    </ul>
</nav>  --}}
<nav class="navbar navbar-expand-lg main-navbar">
    <div class="form-inline mr-auto"></div>
    <ul class="navbar-nav navbar-right ml-auto">
        <li class="nav-link">
            <a href="{{ route('home') }}" target="_blank" class="btn btn-warning">Front End</a>
        </li>
        <li class="dropdown"><a href="#" data-toggle="dropdown"
                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="{{ asset('uploads/' . Auth::guard('admin')->user()->photo) }}"
                    class="rounded-circle mr-1">
                <div class="d-sm-none d-lg-inline-block">Hi, {{ auth()->user()->name }}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-title">Logged in 5 min ago</div>
                <a href="{{ route('admin_profile') }}" class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Profile
                </a>
                <div class="dropdown-divider"></div>
                <form method="POST" action="{{ route('admin_logout') }}">
                    @csrf
                    <a href="#"
                        onclick="event.preventDefault();
                    this.closest('form').submit();"
                        class="dropdown-item has-icon text-danger">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </form>
            </div>
        </li>
    </ul>
</nav>
