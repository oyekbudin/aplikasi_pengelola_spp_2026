@include('header')
<div class="layoutadmin">
    <div class="a">
        <div class="logo-nav mt-3">
            <!--img class="" src="uploads/logo_nu.png"-->
            <img src="{{ asset('uploads/logo_nu.png') }}">
        </div>
        <span class="title-nav mb-3">SMP Ma'arif NU 01 Wanareja</span>

        <nav class="menubar">
            <a href="/ruangguru">
                <div class="menubarlist <?= $data['title'] == 'Ruang Guru' ? 'active' : '' ?>">
                    <i data-lucide="home"></i>
                    <span>Dashboard</span>
                </div>

                <div class="separator mt-3">
                    Perencanaan :
                </div>
            </a>
            <a href="/datasiswa">
                <div class="menubarlist <?= $data['title'] == 'Kelola Data Siswa' ? 'active' : '' ?>">
                    <i data-lucide="users"></i>
                    <span>Kelola Data Siswa</span>
                </div>
            </a>
            <a href="/datainfaq">
                <div class="menubarlist <?= $data['title'] == 'Kelola Data Infaq' ? 'active' : '' ?>">
                    <i data-lucide="list-checks"></i>
                    <span>Kelola Data Infaq</span>
                </div>
            </a>

            <div class="separator mt-3">
                Pengelolaan :
            </div>
            </a>
            <a href="">
                <div class="menubarlist <?= $data['title'] == 'Pembayaran' ? 'active' : '' ?>">
                    <i data-lucide="calculator"></i>
                    <span>Pembayaran</span>
                </div>
            </a>
            <a href="">
                <div class="menubarlist <?= $data['title'] == 'Tagihan' ? 'active' : '' ?>">
                    <i data-lucide="file-text"></i>
                    <span>Tagihan</span>
                </div>
            </a>

            <div class="separator mt-3">
                Pelaporan :
            </div>
            </a>
            <a href="">
                <div class="menubarlist <?= $data['title'] == 'Laporan Bulanan' ? 'active' : '' ?>">
                    <i data-lucide="trending-up"></i>
                    <span>Laporan Bulanan</span>
                </div>
            </a>
            <a href="">
                <div class="menubarlist <?= $data['title'] == 'Laporan Tahunan' ? 'active' : '' ?>">
                    <i data-lucide="trending-up"></i>
                    <span>Laporan Tahunan</span>
                </div>
            </a>
            <a href="">
                <div class="menubarlist <?= $data['title'] == 'Buku Induk' ? 'active' : '' ?>">
                    <i data-lucide="book"></i>
                    <span>Buku Induk</span>
                </div>
            </a>

            <div class="separator mt-3">

            </div>
            </a>
            <a href="/pengaturan">
                <div class="menubarlist <?= $data['title'] == 'Pengaturan' ? 'active' : '' ?>">
                    <i data-lucide="settings"></i>
                    <span>Pengaturan</span>
                </div>
            </a>
            <a href="/keluar">
                <div class="menubarlist">
                    <i data-lucide="door-open"></i>
                    <span>Keluar</span>
                </div>
            </a>



        </nav>

    </div>
    <div class="b">
        <div class="navbar">
            <span class="ms-3">Aplikasi Pengelola Infaq</span>
            <div class="profil"><i data-lucide="user"></i><span>Arvin Noer Hakim</span></div>
        </div>
        <div class="content">
            <div class="title-area">

                @if ($data['title'] == 'Ruang Guru')
                    <h2 class="desktop-only">{{ $data['title'] }}</h2>
                    <h2 class="text-birutua">Aplikasi Pengelola Infaq</h2>
                @else
                    <!--a href="javascript:history.back()">
                        <i data-lucide="arrow-left"></i>
                    </a-->
                    <h2>{{ $data['title'] }}</h2>
                @endif

            </div>
