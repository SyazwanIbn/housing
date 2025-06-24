<div id="sidebar">
    <div class="sidebar-header">
        <i class="fas fa-building logo-icon"></i>
        <h3>Housing </h3>
    </div>

    <ul class="sidebar-menu">
        <li class="{{ request()->is('/') ? 'active' : '' }}">
            <a href="{{ url('/') }}">
                <span class="menu-icon"><i class="fas fa-home"></i></span>
                <span>Laman Utama</span>
            </a>
        </li>

        <li class="{{ request()->is('dashboard/master-data') ? 'active' : '' }}">
            <a href="{{ route('master-data.index') }}">
                <span class="menu-icon"><i class="fas fa-database"></i></span>
                <span>Master Data</span>
            </a>
        </li>

         <li class="{{ request()->is('dashboard/unit-sewa') ? 'active' : '' }}">
            <a href="{{ route('unit-sewa.index') }}">
                <span class="menu-icon"><i class="fas fa-house-user"></i></span>
                <span>Unit Sewa</span>
            </a>
        </li>

        <li class="{{ request()->is('dashboard/unit-kedai') ? 'active' : '' }}">
            <a href="{{ route('unit-kedai.index') }}">
                <span class="menu-icon"><i class="fas fa-shop"></i></span>
                <span>Unit Kedai</span>
            </a>
        </li>

        <li class="{{ request()->is('dashboard/tukar-nama') ? 'active' : '' }}">
            <a href="{{ route('tukar-nama.index') }}">
                <span class="menu-icon"><i class="fas fa-exchange-alt"></i></span>
                <span>Tukar Nama</span>
            </a>
        </li>

        <li class="{{ request()->is('dashboard/tukar-unit') ? 'active' : '' }}">
            <a href="{{ route('tukar-unit.index') }}">
                <span class="menu-icon"><i class="fas fa-id-card"></i></span>
                <span>Tukar Unit</span>
            </a>
        </li>

        <li class="{{ request()->is('dashboard/lanjut-tempoh') ? 'active' : '' }}">
            <a href="{{ route('lanjut-tempoh.index') }}">
                <span class="menu-icon"><i class="fas fa-calendar-plus"></i></span>
                <span>Lanjut Tempoh</span>
            </a>
        </li>

        <li class="{{ request()->is('master-data*') ? 'active' : '' }}">
            <a href="#">
                <span class="menu-icon"><i class="fas fa-database"></i></span>
                <span>Unit Jual</span>
            </a>
        </li>

         <li class="{{ request()->is('dashboard/tlkb') ? 'active' : '' }}">
            <a href="{{ route('tlkb.index') }}">
                <span class="menu-icon"><i class="fas fa-car"></i></span>
                <span>TLKB</span>
            </a>
        </li>

         <li class="{{ request()->is('dashboard/penguatkuasaan') ? 'active' : '' }}">
            <a href="{{ route('penguatkuasaan.index') }}">
                <span class="menu-icon"><i class="fas fa-gun"></i></span>
                <span>Penguatkuasaan</span>
            </a>
        </li>

         <li class="{{ request()->is('dashboard/senarai-hitam') ? 'active' : '' }}">
            <a href="{{ route('senarai-hitam.index')}}">
                <span class="menu-icon"><i class="fas fa-landmark"></i></span>
                <span>Senarai Hitam</span>
            </a>
        </li>

         <li class="{{ request()->is('master-data*') ? 'active' : '' }}">
            <a href="#">
                <span class="menu-icon"><i class="fas fa-database"></i></span>
                <span>Sekatan</span>
            </a>
        </li>

         <li class="{{ request()->is('dashboard/bancian') ? 'active' : '' }}">
            <a href="{{ route('bancian.index')}}">
                <span class="menu-icon"><i class="fas fa-clipboard"></i></span>
                <span>Bancian</span>
            </a>
        </li>

        <li class="{{ request()->is('dashboard/osc') ? 'active' : '' }}">
            <a href="{{ route('osc.index')}}">
                <span class="menu-icon"><i class="fas fa-bolt"></i></span>
                <span>One Stop Centre</span>
            </a>
        </li>

        <li class="{{ request()->is('dashboard/penyelenggaraan') ? 'active' : '' }}">
            <a href="{{ route('penyelenggaraan.index') }}">
                <span class="menu-icon"><i class="fas fa-tools"></i></span>
                <span>Penyelenggaraan</span>
            </a>
        </li>

        <li class="{{ request()->is('master-data*') ? 'active' : '' }}">
            <a href="#">
                <span class="menu-icon"><i class="fas fa-database"></i></span>
                <span>Projek Kecil</span>
            </a>
        </li>

        <li class="{{ request()->is('master-data*') ? 'active' : '' }}">
            <a href="#">
                <span class="menu-icon"><i class="fas fa-database"></i></span>
                <span>Pemantauan Kontraktor</span>
            </a>
        </li>

        <li class="{{ request()->is('master-data*') ? 'active' : '' }}">
            <a href="#">
                <span class="menu-icon"><i class="fas fa-database"></i></span>
                <span>Aduan</span>
            </a>
        </li>

        <li class="{{ request()->is('master-data*') ? 'active' : '' }}">
            <a href="#">
                <span class="menu-icon"><i class="fas fa-database"></i></span>
                <span>Program</span>
            </a>
        </li>

        <li class="{{ request()->is('master-data*') ? 'active' : '' }}">
            <a href="#">
                <span class="menu-icon"><i class="fas fa-database"></i></span>
                <span>Pembangunan Sosial</span>
            </a>
        </li>

        <li class="{{ request()->is('master-data*') ? 'active' : '' }}">
            <a href="#">
                <span class="menu-icon"><i class="fas fa-database"></i></span>
                <span>Bas Sekolah</span>
            </a>
        </li>

        <li class="{{ request()->is('master-data*') ? 'active' : '' }}">
            <a href="#">
                <span class="menu-icon"><i class="fas fa-database"></i></span>
                <span>Laporan</span>
            </a>
        </li>

        <li class="{{ request()->is('master-data*') ? 'active' : '' }}">
            <a href="#">
                <span class="menu-icon"><i class="fas fa-database"></i></span>
                <span>Sistem Admin</span>
            </a>
        </li>
    </ul>

    <div class="sidebar-footer">
        <div class="text-center">v1.0.0</div>
    </div>
</div>
