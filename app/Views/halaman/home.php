<?= $this->extend('template/index'); ?>
<?= $this->section('page-content'); ?>

<div class="row">
    <h1 class="h3 mb-4 text-gray-800">Dashboard Admin</h1>
    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <a href="<?= '/kategori' ?>" class="btn btn-info">Kategori</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <a href="<?= '/pesan' ?>" class="btn btn-info">Pesan</a>
                </div>
            </div>
        </div>
    </div>

</div>

<?= $this->endSection(); ?>