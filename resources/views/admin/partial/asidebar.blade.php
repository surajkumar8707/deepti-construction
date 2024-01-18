<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link elevation-1">
        <img src="{{ URL::asset('/images/avatar.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-1"
            style="opacity: 1.0">
        <span class="brand-text font-weight-light">Name</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                @if (Auth::guard('admin')->check())
                    <li class="nav-item">
                        <a href="{{ route('admin.dashboard') }}"
                            class="{{ $nav == 'Dashboard' ? 'active' : '' }} nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.users.index') }}"
                            class="{{ $nav == 'users' ? 'active' : '' }} nav-link">
                            <i class="nav-icon fa-brands fa-product-hunt"></i>
                            <p>Users</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#logoutModal" class="nav-link" onclick="event.preventDefault();">
                            <i class="mr-2 fas fa-sign-out-alt"></i>
                            {{ __('Log Out') }}
                        </a>
                    </li>
                @endif
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>