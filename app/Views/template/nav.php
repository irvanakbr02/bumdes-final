<nav class="navbar p-0 fixed-top d-flex flex-row" id="navbar2">

    <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="">
            <a class="navbar-brand brand-logo-mini" href="<?= base_url("/"); ?>"><img src="/img/bumdes.jpg" class="logonav mr-10" alt="logo" /><span class="nama-logo">Bumdesa Tambaknegara</span> </a>
        </button>
        <!-- <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="<?= base_url("/"); ?>"><img src="/img/bumdes.jpg" alt="logo" /></a>
        </div> -->
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link" href="<?= base_url("/"); ?>">Home</a>
            </li>
            <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profil</a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">


                    <a class="dropdown-item" href="<?= base_url("/profil/visimisi"); ?>">Visi Misi</a>

                    <a class="dropdown-item" href="#"> Kepengurusan </a>
                    <ul class="dropdown2">
                        <a class="dropdown-item" href="<?= base_url("/profil/struktur"); ?>">Struktur Kepengurusan</a>
                        <a class="dropdown-item" href="<?= base_url("/profil/biodata"); ?>">Biodata Pengurus</a>
                        <a class="dropdown-item" href="<?= base_url("/profil/unitusaha"); ?>">Unit Usaha</a>
                        <a class="dropdown-item" href="<?= base_url("/profil/regulasi"); ?>">Regulasi</a>

                        <ul class="dropdown3">

                        </ul>
                    </ul>
                </div>
            </li>
            <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link" href="<?= base_url("/kontak"); ?>">Kontak</a>
            </li>

            <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link" href="<?= base_url("/berita"); ?>">Berita</a>
            </li>

            <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link" href="<?= base_url("/laporan"); ?>">Laporan</a>
            </li>

            <!-- <li class="nav-item dropdown border-left">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Menu</a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-motorbike"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1">Pariwisata</p>
                        </div>
                    </a>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-silverware-variant"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1">Kuliner</p>
                        </div>
                    </a>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-music-circle"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1">Kesenian</p>
                        </div>
                    </a>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-human"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <a class="preview-subject ellipsis mb-1" href="<?= base_url("/menu/budaya"); ?>">Budaya</a>
                        </div>
                    </a>
                </div>
            </li> -->
            <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Menu</a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
                    <a class="dropdown-item" href="<?= base_url("/menu/wisata"); ?>">Wisata</a>
                    <a class="dropdown-item" href="<?= base_url("/menu/kesenian"); ?>">Kesenian</a>
                    <a class="dropdown-item" href="<?= base_url("/menu/kuliner"); ?>">Kuliner</a>
                    <a class="dropdown-item" href="<?= base_url("/menu/budaya"); ?>">Budaya</a>
                </div>
            </li>
            <li class="nav-item dropdown d-none d-lg-block">
                <a class="btn btn-primary" href="<?= base_url("/admin/dashboard"); ?>">Login</a>
            </li>
        </ul>
    </div>
</nav>