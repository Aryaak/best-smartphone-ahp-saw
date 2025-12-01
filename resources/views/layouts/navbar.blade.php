<!-- begin::navigation -->
<div class="navigation">
    <div class="navigation-header">
        <span>Navigation</span>
        <a href="#"><i class="ti-close"></i></a>
    </div>

    <div class="navigation-menu-body">
        <ul>
            <li>
                <a class="{{ request()->routeIs('index') ? 'active' : '' }}" 
                   href="{{ route('index') }}">
                    <span class="nav-link-icon">
                        <i data-feather="home"></i>
                    </span>
                    <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a class="{{ request()->routeIs('units.*') ? 'active' : '' }}" 
                   href="{{ route('units.index') }}">
                    <span class="nav-link-icon">
                        <i data-feather="tag"></i>
                    </span>
                    <span>Satuan</span>
                </a>
            </li>

            <li>
                <a class="{{ request()->routeIs('criterias.*') ? 'active' : '' }}" 
                   href="{{ route('criterias.index') }}">
                    <span class="nav-link-icon">
                        <i data-feather="sliders"></i>
                    </span>
                    <span>Kriteria</span>
                </a>
            </li>

            <li>
                <a class="{{ request()->routeIs('alternatif.*') ? 'active' : '' }}" 
                   href="#">
                    <span class="nav-link-icon">
                        <i data-feather="layers"></i>
                    </span>
                    <span>Alternatif</span>
                </a>
            </li>

            <li>
                <a class="{{ request()->routeIs('ahp.*') ? 'active' : '' }}" 
                   href="{{ route('ahp.index') }}">
                    <span class="nav-link-icon">
                        <i data-feather="grid"></i>
                    </span>
                    <span>AHP</span>
                </a>
            </li>

            <li>
                <a class="{{ request()->routeIs('saw.*') ? 'active' : '' }}" 
                   href="#">
                    <span class="nav-link-icon">
                        <i data-feather="activity"></i>
                    </span>
                    <span>SAW</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- end::navigation -->