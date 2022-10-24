<?= $this->extend('template/index'); ?>
<?= $this->section('page-content'); ?>
<div class="row">
    <h1 class="font-weight-600 mb-4">
        Tambah Visi Misi
    </h1>
    <form action="/admin/profil/visi/save" method="POST" enctype="multipart/form-data">
        <div class="form-group row">
            <label for="visi" class="col-sm-2 col-form-label">Visi</label>
            <div class="col-sm-10">
                <textarea class="form-control <?= ($validation->hasError('visi')) ? 'is-invalid' : '' ?>" name="visi" id="deskripsi" cols="80" rows="50"></textarea>
                <div class="invalid-feedback">
                    <?= $validation->getError('visi'); ?>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="periode" class="col-sm-2 col-form-label">Periode</label>
            <div class="col-sm-10">
                <select name="periode" class="form-control" id="periode" required>
                    <option value="" hidden></option>
                    <?php foreach ($periode as $key => $value) : ?>
                        <option value="<?= $value['periode_id'] ?>"><?= $value['periode'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
        </div>
    </form>
</div>
<?= $this->endSection(); ?>