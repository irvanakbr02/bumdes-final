<?= $this->extend('template/index'); ?>
<?= $this->section('page-content'); ?>
<div class="row">
    <h1 class="font-weight-600 mb-4">
        Tambah Kategori Baru
    </h1>
    <form action="/admin/menu/kategori/save" method="POST" enctype="multipart/form-data">
        <div class="form-group row">
            <?= csrf_field(); ?>
            <label for="kategori_nama" class="col-sm-2 col-form-label">Kategori</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('kategori_nama')) ? 'is-invalid' : '' ?>" id="kategori_nama" name="kategori_nama" autofocus>
                <div class="invalid-feedback">
                    <?= $validation->getError('kategori_nama'); ?>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-secondary">Tambah Data Baru</button>
            </div>
        </div>
    </form>
</div>
<?= $this->endSection(); ?>