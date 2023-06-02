<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin_home') }}">Admin Panel</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('admin_home') }}"></a>
        </div>

        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ Request::is('admin/home') ? "active" : "" }}"><a class="nav-link" href="{{ route('admin_home') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Dashboard"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>

            <li class="menu-header">Master</li>
            <li class="nav-item dropdown {{ Request::is('admin/home-banner')||Request::is('admin/home-about')||Request::is('admin/home-skill')||Request::is('admin/home-qualification')||Request::is('admin/home-counter')||Request::is('admin/home-testimonial')||Request::is('admin/home-client')||Request::is('admin/home-service')||Request::is('admin/home-portfolio') ? "active" : "" }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-columns"></i> <span>Home Page</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/home-banner') ? "active" : "" }}"><a class="nav-link" href="{{ route('admin_home_banner') }}"><i class="fas fa-angle-right"></i>Banner Section</a></li>
                    <li class="{{ Request::is('admin/home-about') ? "active" : "" }}"><a class="nav-link" href="{{ route('admin_home_about') }}"><i class="fas fa-angle-right"></i>About Section</a></li>
                    <li class="{{ Request::is('admin/home-skill') ? "active" : "" }}"><a class="nav-link" href="{{ route('admin_home_skill') }}"><i class="fas fa-angle-right"></i>Skill Section</a></li>
                    <li class="{{ Request::is('admin/home-qualification') ? "active" : "" }}"><a class="nav-link" href="{{ route('admin_home_qualification') }}"><i class="fas fa-angle-right"></i>Qualification Section</a></li>
                    <li class="{{ Request::is('admin/home-counter') ? "active" : "" }}"><a class="nav-link" href="{{ route('admin_home_counter') }}"><i class="fas fa-angle-right"></i>Counter Section</a></li>
                    <li class="{{ Request::is('admin/home-testimonial') ? "active" : "" }}"><a class="nav-link" href="{{ route('admin_home_testimonial') }}"><i class="fas fa-angle-right"></i>Testimonial Section</a></li>
                    <li class="{{ Request::is('admin/home-client') ? "active" : "" }}"><a class="nav-link" href="{{ route('admin_home_client') }}"><i class="fas fa-angle-right"></i>Client Section</a></li>
                    <li class="{{ Request::is('admin/home-service') ? "active" : "" }}"><a class="nav-link" href="{{ route('admin_home_service') }}"><i class="fas fa-angle-right"></i>Service Section</a></li>
                    <li class="{{ Request::is('admin/home-portfolio') ? "active" : "" }}"><a class="nav-link" href="{{ route('admin_home_portfolio') }}"><i class="fas fa-angle-right"></i>Portfolio Section</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown {{ Request::is('admin/page/services')||Request::is('admin/page/portfolios') ? "active" : "" }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-columns"></i> <span>Other Pages</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/page/services') ? "active" : "" }}"><a class="nav-link" href="{{ route('admin_page_services') }}"><i class="fas fa-angle-right"></i>Services Page</a></li>
                    <li class="{{ Request::is('admin/page/portfolios') ? "active" : "" }}"><a class="nav-link" href="{{ route('admin_page_portfolios') }}"><i class="fas fa-angle-right"></i>Portfolios Page</a></li>
                </ul>
            </li>
            
            <li class="{{ Request::is('admin/skill/*') ? "active" : "" }}"><a class="nav-link" href="{{ route('admin_skill_show') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Skills"><i class="fas fa-columns"></i> <span>Skills</span></a></li>

            <li class="{{ Request::is('admin/education/*') ? "active" : "" }}"><a class="nav-link" href="{{ route('admin_education_show') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Education"><i class="fas fa-columns"></i> <span>Education</span></a></li>

            <li class="{{ Request::is('admin/experience/*') ? "active" : "" }}"><a class="nav-link" href="{{ route('admin_experience_show') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Experience"><i class="fas fa-columns"></i> <span>Experience</span></a></li>

            <li class="{{ Request::is('admin/testimonial/*') ? "active" : "" }}"><a class="nav-link" href="{{ route('admin_testimonial_show') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Testimonial"><i class="fas fa-columns"></i> <span>Testimonial</span></a></li>

            <li class="{{ Request::is('admin/client/*') ? "active" : "" }}"><a class="nav-link" href="{{ route('admin_client_show') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Clients"><i class="fas fa-columns"></i> <span>Clients</span></a></li>

            <li class="{{ Request::is('admin/service/*') ? "active" : "" }}"><a class="nav-link" href="{{ route('admin_service_show') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Service"><i class="fas fa-columns"></i> <span>Service</span></a></li>
            
            <li class="nav-item dropdown {{ Request::is('admin/portfolio-category/*')||Request::is('admin/portfolio/*') ? "active" : "" }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-columns"></i> <span>Portfolios</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/portfolio-category/*') ? "active" : "" }}"><a class="nav-link" href="{{ route('admin_portfolio_category_show') }}"><i class="fas fa-angle-right"></i>Category</a></li>
                    <li class="{{ Request::is('admin/portfolio/*') ? "active" : "" }}"><a class="nav-link" href="{{ route('admin_portfolio_show') }}"><i class="fas fa-angle-right"></i>Portfolio</a></li>
                </ul>
            </li>
        </ul>
    </aside>
</div>