<?= $this->extend('template/index'); ?>
<?= $this->section('page-content'); ?>
<div class="row">
    <h1 class="font-weight-600 mb-4">
        Tambah Periode Baru
    </h1>
    <form action="/admin/profil/periode/save" method="POST" enctype="multipart/form-data">
        <div class="form-group row">
            <?= csrf_field(); ?>
            <label for="periode" class="col-sm-2 col-form-label">Periode</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('periode')) ? 'is-invalid' : '' ?>" id="periode" name="periode" autofocus>
                <div class="invalid-feedback">
                    <?= $validation->getError('periode'); ?>
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