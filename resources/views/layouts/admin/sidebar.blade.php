        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Aplikasi Pengajuan</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

                 <li class="nav-item">
                    <a class="nav-link" href="{{ route('user') }}">
                        <i class="fa-regular fa-user"></i>
                    <span>User</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('persyaratan') }}">
                        <i class="fa-solid fa-book"></i>
                    <span>Persyaratan</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('layanan') }}">
                        <i class="fa-solid fa-briefcase"></i>
                    <span>Layanan</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('rincian_layanan') }}">
                        <i class="fa-solid fa-book-open"></i>
                    <span>Rincian Layanan</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pemohon') }}">
                        <i class="fa-solid fa-users"></i>
                    <span>Pemohon</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pemohonan') }}">
                        <i class="fa-solid fa-people-arrows"></i>
                    <span>Pemohonan</span></a>
                </li>


            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
