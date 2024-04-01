<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                <i class="fa fa-bars"></i>
            </a>
        </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="border-left nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="image img-circle" style="height:30px;width:30px"
                    src="{{ URL::asset('public/images/avatar.png') }}">
            </a>
            <ul class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="navbarDropdown">
                <span class="dropdown-item">
                    <i class="fas fa-user fa-sm fa-fw mr-3 text-gray-400"></i>
                    {{ Auth::user()->name }}
                </span>
                <div class="dropdown-divider"></div>

                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#logoutModal" class="dropdown-item"
                    onclick="event.preventDefault();">
                    <i class="mr-2 fas fa-sign-out-alt"></i>
                    {{ __('Log Out') }}
                </a>

            </ul>
        </li>
    </ul>
</nav>

<!-- Modal Logout Start-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                  <i class="fas fa-sign-out-alt"></i>
                  {{ __('Log Out') }}
                </h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure to destroy this session?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <a href="#" class="btn btn-danger"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                        <i class="mr-2 fas fa-sign-out-alt"></i>
                        {{ __('Log Out') }}
                    </a>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal Logout end -->
<!-- /.navbar -->
