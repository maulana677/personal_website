<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin_home') }}">Admin Panel</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('admin_home') }}"></a>
        </div>

        <ul class="sidebar-menu">

            <li class="{{ Request::is('admin/home') ? "active" : "" }}"><a class="nav-link" href="{{ route('admin_home') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Dashboard"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>

            <li class="nav-item dropdown {{ Request::is('admin/home-banner')||Request::is('admin/home-about')||Request::is('admin/home-skill')||Request::is('admin/home-qualification')||Request::is('admin/home-counter')||Request::is('admin/home-testimonial') ? "active" : "" }}">
                <a href="#" class="nav-link has-dropdown"><i class="fa fa-home"></i>Home Page</a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/home-banner') ? "active" : "" }}"><a class="nav-link" href="{{ route('admin_home_banner') }}"><i class="fas fa-angle-right"></i>Banner Section</a></li>
                    <li class="{{ Request::is('admin/home-about') ? "active" : "" }}"><a class="nav-link" href="{{ route('admin_home_about') }}"><i class="fas fa-angle-right"></i>About Section</a></li>
                    <li class="{{ Request::is('admin/home-skill') ? "active" : "" }}"><a class="nav-link" href="{{ route('admin_home_skill') }}"><i class="fas fa-angle-right"></i>Skill Section</a></li>
                    <li class="{{ Request::is('admin/home-qualification') ? "active" : "" }}"><a class="nav-link" href="{{ route('admin_home_qualification') }}"><i class="fas fa-angle-right"></i>Qualification Section</a></li>
                    <li class="{{ Request::is('admin/home-counter') ? "active" : "" }}"><a class="nav-link" href="{{ route('admin_home_counter') }}"><i class="fas fa-angle-right"></i>Counter Section</a></li>
                    <li class="{{ Request::is('admin/home-testimonial') ? "active" : "" }}"><a class="nav-link" href="{{ route('admin_home_testimonial') }}"><i class="fas fa-angle-right"></i>Testimonial Section</a></li>
                </ul>
            </li>
            
            <li class="{{ Request::is('admin/skill/*') ? "active" : "" }}"><a class="nav-link" href="{{ route('admin_skill_show') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Skills"><i class="fas fa-hand-point-right"></i> <span>Skills</span></a></li>

            <li class="{{ Request::is('admin/education/*') ? "active" : "" }}"><a class="nav-link" href="{{ route('admin_education_show') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Education"><i class="fas fa-hand-point-right"></i> <span>Education</span></a></li>

            <li class="{{ Request::is('admin/experience/*') ? "active" : "" }}"><a class="nav-link" href="{{ route('admin_experience_show') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Experience"><i class="fas fa-hand-point-right"></i> <span>Experience</span></a></li>

            <li class="{{ Request::is('admin/testimonial/*') ? "active" : "" }}"><a class="nav-link" href="{{ route('admin_testimonial_show') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Testimonial"><i class="fas fa-hand-point-right"></i> <span>Testimonial</span></a></li>
            
            <li class=""><a class="nav-link" href="setting.html" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Setting"><i class="fas fa-hand-point-right"></i> <span>Setting</span></a></li>
            
            <li class=""><a class="nav-link" href="form.html" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Form"><i class="fas fa-hand-point-right"></i> <span>Form</span></a></li>

            <li class=""><a class="nav-link" href="invoice.html" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Invoice"><i class="fas fa-hand-point-right"></i> <span>Invoice</span></a></li>

        </ul>
    </aside>
</div>