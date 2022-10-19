<?= $this->extend('template/index'); ?>
<?= $this->section('page-content'); ?>


<div class="row">
    <h1 class="font-weight-600 mb-4">
        Tambah Anggota Baru
    </h1>
    <form action="/admin/profil/anggota/save" method="POST" enctype="multipart/form-data">
        <div class="form-group row">
            <?= csrf_field(); ?>
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : '' ?>" id="nama" name="nama" autofocus>
                <div class="invalid-feedback">
                    <?= $validation->getError('nama'); ?>
                </div>
            </div>

        </div>
        <div class="form-group row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <textarea class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : '' ?>" name="alamat" id="alamat" cols="80" rows="50"></textarea>
                <div class="invalid-feedback">
                    <?= $validation->getError('alamat'); ?>
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
            <label for="foto" class="col-sm-2 col-form-label">Foto</label>
            <div class="col-sm-2">
                <img src="/img/default.jpg" class="img-thumbnail img-preview">
            </div>
            <div class="col-sm-8">
                <div class="custom-file">
                    <input type="file" class="custom-file-input <?= ($validation->hasError('foto')) ? 'is-invalid' : '' ?>" id="foto" name="foto" onchange="previewImg()">
                    <label class="custom-file-label" for="foto">Pilih Gambar..</label>

                    <div class="invalid-feedback">
                        <?= $validation->getError('foto'); ?>
                    </div>
                </div>

            </div>

        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Tambah Data Anggota</button>
            </div>
        </div>
    </form>
</div>
<?= $this->endSection(); ?>