<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <img alt="image" class="rounded-circle" style="width: 50px;" src="{{ asset('admin_assets/img/profile_small.jpg') }}"/>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="block m-t-xs font-bold">Welcome {{ ucwords(Auth::guard('admin')->user()->username) }}</span>
                        <span class="text-muted text-xs block">
                            {{ get_section_content('project', 'site_title') }}
                        </span>
                    </a>
                </div>
                <div class="logo-element">
                    {{ ucwords(Auth::guard('admin')->user()->username) }}
                    <span class="text-muted text-xs block">
                        {{ get_section_content('project', 'short_site_title') }}
                    </span>
                </div>
            </li>
            <li class="{{ Request::is('admin') ? 'active' : '' }} {{ Request::is('admin/admin') ? 'active' : '' }} {{ Request::is('admin/change_password') ? 'active' : '' }}">
                <a href="{{ url('admin') }}"><i class="fa-solid fa-gauge-high"></i> <span class="nav-label">Dashboard</span></a>
            </li>
            <li class="{{ Request::is('admin/locations') ? 'active' : '' }} {{ Request::is('admin/locations/*') ? 'active' : '' }}">
                <a href="{{ url('admin/locations') }}"><i class="fa-solid fa-location"></i> <span class="nav-label">Locations</span></a>
            </li>
            <li class="{{ Request::is('admin/providers') ? 'active' : '' }} {{ Request::is('admin/providers/*') ? 'active' : '' }}">
                <a href="{{ url('admin/providers') }}"><i class="fa-solid fa-building"></i> <span class="nav-label">Service Providers</span></a>
            </li>
            <li class="{{ Request::is('admin/imports') ? 'active' : '' }} {{ Request::is('admin/imports/*') ? 'active' : '' }}">
                <a href="{{ url('admin/imports') }}"><i class="fa-solid fa-file-arrow-up"></i> <span class="nav-label">Bulk Imports</span></a>
            </li>
            <li class="{{ Request::is('admin/users') ? 'active' : '' }} {{ Request::is('admin/users/detail*') ? 'active' : '' }}">
                <a href="{{ url('admin/users') }}"><i class="fa-solid fa-users"></i> <span class="nav-label">Clients</span></a>
            </li>
        </ul>
    </div>
</nav>