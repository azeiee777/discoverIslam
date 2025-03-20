<div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100"
    style="min-width: 200px;">
    <a href="{{ route('admin.dashboard.index') }}"
        class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <img src="{{ asset('images/logo.png') }}" alt="Discover Islam" class="img-fluid" style="height: 60px; width:200px;">
    </a>

    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start flex-grow-1"
        id="menu">
        <li class="nav-item">
            <a href="#" class="nav-link align-middle px-0 text-white">
                <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-white">
                <i class="fas fa-users"></i> <span class="ms-1 d-none d-sm-inline">Users</span>
            </a>
            <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu1">
                <li class="w-100">
                    <a href="#" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">Admin</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">Verified</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">General</span>
                    </a>
                </li>
            </ul>
        </li>
        {{-- Posts --}}
        <li>
            <a href="#submenu4" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-white">
                <i class="fas fa-file-text"></i> <span class="ms-1 d-none d-sm-inline">Posts</span>
            </a>
            <ul class="collapse nav flex-column ms-1" id="submenu4" data-bs-parent="#menu2">
                <li class="w-100">
                    <a href="#" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">Asked by
                            users</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">Posted by
                            admin</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>

    <hr>

    <!-- Profile section fixed at the bottom -->
    <div class="dropdown pb-4">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
            id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="{{ asset('images/default_profile_image.png') }}" alt="User image" width="30" height="30"
                class="rounded-circle">
            <span class="d-none d-sm-inline mx-1">Admin</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
    </div>
</div>
