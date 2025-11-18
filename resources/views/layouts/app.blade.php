@include('layouts.head')


<!-- Layout wrapper -->
<div class="layout-wrapper">

    <!-- Header -->
    <div class="header d-print-none">
        <div class="header-container">
            <div class="header-left">
                <div class="navigation-toggler">
                    <a href="#" data-action="navigation-toggler">
                        <i data-feather="menu"></i>
                    </a>
                </div>

                <div class="header-logo">
                    <a href="">
                        BEST SMARTPHONE AHP & SAW
                    </a>
                </div>
            </div>

            <ul class="navbar-nav ml-auto text-right">
                <li class="nav-item dropdown">
                    <a href="" class="nav-link dropdown-toggle" title="User menu" data-toggle="dropdown">
                        <span class="ml-2 d-sm-inline d-none">Superadmin</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right btn btn-danger">
                        <a href="{{ route('logout') }}" class="text-light" data-sidebar-target="#settings">Keluar</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- ./ Header -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
        @include('layouts.navbar')

        <!-- Content body -->
        <div class="content-body">
            <!-- Content -->
            <div class="content">
                    @yield('content')
            </div>
            <!-- ./ Content -->


            <!-- Footer -->
            <footer class="content-footer">
                <div>© 2025 Kelompok 4 - Mata Kuliah Sistem Pengambilan Keputusan Paralel C</div>
                <div>
                    <nav class="nav">
                        <a href="#" class="nav-link">Cynthia (045)</a>
                        <a href="#" class="nav-link">Fidyah (047)</a>
                        <a href="#" class="nav-link">Arya (067)</a>
                        <a href="#" class="nav-link">Raihana (068)</a>
                    </nav>
                </div>
            </footer>
            <!-- ./ Footer -->
        </div>
        <!-- ./ Content body -->
    </div>
    <!-- ./ Content wrapper -->
</div>
<!-- ./ Layout wrapper -->

@include('layouts.tail')
