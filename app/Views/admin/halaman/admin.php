<?= $this->extend('template/index'); ?>
<?= $this->section('page-content'); ?>

<div class="row">
    <h1 class="h3 mb-4 text-gray-800">Dashboard Admin</h1>
    <div class="col-xl-3 col-sm-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <a href="<?= '/admin/menu/kategori' ?>" class="btn btn-info">Kategori</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <a href="<?= '/pesan' ?>" class="btn btn-info">Pesan</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <a href="<?= '/admin/profil/visi' ?>" class="btn btn-info">Visi Misi</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <a href="<?= '/admin/profil/anggota' ?>" class="btn btn-info">Keanggotaan</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <a href="<?= '/admin/profil/periode' ?>" class="btn btn-info">Periode</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <a href="<?= '/admin/menu' ?>" class="btn btn-info">Menu</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <a href="<?= '/admin/berita' ?>" class="btn btn-info">Berita</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <a href="<?= '/admin/laporan' ?>" class="btn btn-info">Laporan</a>
                </div>
            </div>
        </div>
    </div>


</div>

<?= $this->endSection(); ?>