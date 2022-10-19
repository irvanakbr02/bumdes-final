<?= $this->extend('template/index'); ?>
<?= $this->section('page-content'); ?>
<div class="row">
    <div class="container">
        <h1 class="font-weight-600 mb-4">
            Ubah Periode
        </h1>
        <form action="/admin/profil/periode/update/<?= $periode['periode_id']; ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group row">
                <?= csrf_field(); ?>
                <label for="periode" class="col-sm-2 col-form-label">Periode</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('periode')) ? 'is-invalid' : '' ?>" id="periode" name="periode" value="<?= (old('periode')) ? old('periode') : $periode['periode'] ?>" autofocus>
                    <div class="invalid-feedback">
                        <?= $validation->getError('periode'); ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-secondary">Ubah Data</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>