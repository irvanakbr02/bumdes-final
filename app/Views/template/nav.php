<nav class="navbar p-0 fixed-top d-flex flex-row" id="navbar2">

    <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
        <!-- <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
        </button> -->

        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profil</a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">


                    <a class="dropdown-item" href="<?= base_url("/visimisi"); ?>">Visi Misi</a>

                    <a class="dropdown-item" href="#"> Kepengurusan </a>
                    <ul class="dropdown2">
                        <a class="dropdown-item" href="<?= base_url("/struktur"); ?>">Struktur Kepengurusan</a>
                        <a class="dropdown-item" href="<?= base_url("/biodata"); ?>">Biodata Pengurus</a>
                        <a class="dropdown-item" href="<?= base_url("/unitusaha"); ?>">Unit Usaha</a>

                        <ul class="dropdown3">

                        </ul>
                    </ul>
                </div>
            </li>


            <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link" href="<?= base_url("/kontak"); ?>">Kontak</a>
            </li>

            <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link" href="<?= base_url("/kontak"); ?>">Berita</a>
            </li>

            <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link" href="<?= base_url("/kontak"); ?>">Laporan</a>
            </li>

            <li class="nav-item dropdown border-left">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Menu</a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                    <!-- <h6 class="p-3 mb-0">Kategori</h6>
                  <div class="dropdown-divider"></div> -->

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
                            <p class="preview-subject ellipsis mb-1">Budaya</p>
                        </div>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>