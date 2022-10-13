<header id="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="navbar-top">
                <div class="d-flex justify-content-between align-items-center">

                </div>
            </div>
            <div class="navbar-bottom">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <a class="navbar-brand" href="#">
                            <!-- <i class="fa-solid fa-house"></i> -->
                        </a>
                    </div>
                    <div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="navbar-collapse justify-content-center collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav d-lg-flex justify-content-between align-items-center">
                                <li>
                                    <button class="navbar-close">
                                        <i class="mdi mdi-close"></i>
                                    </button>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="<?= base_url("/"); ?>">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="<?= base_url("/profil"); ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Profil
                                    </a>
                                    <ul class="dropdown-menu">
                                        <!-- <li> <a class="dropdown-item" href="#"> Periode 2012-2017 </a></li> -->
                                        <li> <a class="dropdown-item" href="#"> Periode 2017-2022 </a>
                                            <ul class="submenu dropdown-menu">
                                                <li><a class="dropdown-item" href="<?= base_url("/struktur"); ?>">Struktur Kepengurusan</a></li>
                                                <li><a class="dropdown-item" href="<?= base_url("/biodata"); ?>">Biodata Pengurus</a></li>
                                                <li><a class="dropdown-item" href="<?= base_url("/visimisi"); ?>">Visi dan Misi</a></li>
                                                <li><a class="dropdown-item" href="<?= base_url("/unitusaha"); ?>">Unit Usaha</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url("/kontak"); ?>">Kontak</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url("/berita"); ?>">Berita</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url("/laporan"); ?>">Laporan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url("/regulasi"); ?>">Regulasi</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Kategori
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="<?= base_url("/pariwisata"); ?>">Pariwisata</a></li>
                                        <li><a class="dropdown-item" href="<?= base_url("/kuliner"); ?>">Kuliner</a></li>
                                        <li><a class="dropdown-item" href="<?= base_url("/kesenian"); ?>">Kesenian</a></li>
                                        <li><a class="dropdown-item" href="<?= base_url("/budaya"); ?>">Budaya</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url("/admin"); ?>">Admin</a>

                                </li>


                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </nav>
    </div>
</header>