<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/home">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('/img/logo.png') }}">
        </div>
        <div class="sidebar-brand-text mx-3">SIRUCA</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item">
        <a class="nav-link" href="/home">
            <i class="fa-solid fa-house"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        FITUR
    </div>
    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
            aria-expanded="true" aria-controls="collapseBootstrap">
            <i class="fa-solid fa-book"></i>
            <span>Surat</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Surat</h6>
                <a class="collapse-item" href="/buku">Lihat Semua Surat</a>

                @if (Auth::user()->isAdmin == 1)
                    <a class="collapse-item" href="/buku/create">Tambah Surat</a>
                @endif

            </div>
        </div>
    </li> --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm"
            aria-expanded="true" aria-controls="collapseForm">
            <i class="fa-solid fa-layer-group"></i>
            <span>Arsip Surat</span>
        </a>
        <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Arsip Surat</h6>
                <a class="collapse-item" href="/kategori">Lihat Arsip Surat</a>

                @if (Auth::user()->isAdmin == 1)
                    <a class="collapse-item" href="/kategori/create">Tambah Arsip Surat</a>
                @endif

            </div>
        </div>
    </li>

    @if (Auth::user()->isAdmin == 1)
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable"
                aria-expanded="true" aria-controls="collapseTable">
                <i class="fa-solid fa-users"></i>
                <span>Anggota</span>
            </a>
            <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Anggota</h6>
                    <a class="collapse-item" href="/anggota">Lihat Anggota</a>
                    <a class="collapse-item" href="/anggota/create">Tambah Anggota</a>
                </div>
            </div>
        </li>
    @endif

    {{-- @if (Auth::user()->isAdmin == 1)
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePeminjam"
                aria-expanded="true" aria-controls="collapsePeminjam">
                <i class="fa-solid fa fa-exchange"></i>
                <span>Transaksi</span>
            </a>
            <div id="collapsePeminjam" class="collapse" aria-labelledby="headingPeminjam"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Transaksi</h6>
                    <a class="collapse-item" href="/peminjaman">Riwayat Peminjaman</a>
                    <a class="collapse-item" href="/peminjaman/create">Tambahkan Peminjaman</a>
                </div>
            </div>
        </li>
    @endif --}}

    {{-- @if (Auth::user()->isAdmin == 0)
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePeminjam"
                aria-expanded="true" aria-controls="collapsePeminjam">
                <i class="fas fa-fw fa-table"></i>
                <span>Pinjam Buku</span>
            </a>
            <div id="collapsePeminjam" class="collapse" aria-labelledby="headingPeminjam"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Pinjam Buku</h6>
                    <a class="collapse-item" href="/peminjaman/create">Pinjam Buku</a>
                    <a class="collapse-item" href="/peminjaman">Pinjaman Saya</a>
                </div>
            </div>
        </li>
    @endif --}}

</ul>
