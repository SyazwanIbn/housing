<nav class="navbar navbar-expand-lg bg-gray-50 navbar-light shadow-sm " style="z-index: 1030;">
    <div class="d-flex justify-content-between align-items-center w-100 px-4 py-3">
        <button class="btn btn-link me-3 d-lg-none" id="sidebarToggle">
            <i class="fas fa-bars"></i>
        </button>

        <div class="d-flex align-items-center">
            <h5 class="mb-0">@yield('page-title', 'Dashboard')</h5>
        </div>

        <div class="d-flex align-items-center">
            <div class="dropdown">
                <a href="#" class="nav-link dropdown-toggle d-flex align-items-center" id="userDropdown" data-bs-toggle="dropdown">
                    <div class="avatar avatar-sm me-2">
                        <div class="avatar-initial bg-primary rounded-circle text-white">
                            {{-- {{ strtoupper(substr(Auth::user()->name, 0, 1)) }} --}}
                        </div>
                    </div>
                    {{-- <span>{{ Auth::user()->name }}</span> --}}
                </a>
                <ul class="dropdown-menu dropdown-menu-end shadow">
                    <li><a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i> Profile</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i> Settings</a></li>
                    <li><hr class="dropdown-divider"></li>
                    {{--
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                           <i class="fas fa-sign-out-alt me-2"></i> Logout
                        </a>
                        {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form> --}}
                    </li>
                    --}}
                </ul>
            </div>
        </div>
    </div>
</nav>
