<?= $this->extend('template/index'); ?>
<?= $this->section('page-content'); ?>


<div class="row">
    <h1 class="font-weight-600 mb-4">
        ubah data menu
    </h1>
    <form action="/admin/menu/update/<?= $menu['id']; ?>" method="POST" enctype="multipart/form-data">
        <div class="form-group row">
            <?= csrf_field(); ?>
            <input type="hidden" name="slug" id="slug" value="<?= $menu['slug']; ?>">
            <input type="hidden" name="fotoLama" value="<?= $menu['foto']; ?>">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : '' ?>" value="<?= (old('nama')) ? old('nama') : $menu['nama'] ?>" id="nama" name="nama" autofocus>
                <div class="invalid-feedback">
                    <?= $validation->getError('nama'); ?>
                </div>
            </div>

        </div>
        <div class="form-group row">
            <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
            <div class="col-sm-10">
                <textarea class="form-control <?= ($validation->hasError('deskripsi')) ? 'is-invalid' : '' ?>" name="deskripsi" id="deskripsi" cols="80" rows="50"><?= $menu['deskripsi']; ?></textarea>
                <div class="invalid-feedback">
                    <?= $validation->getError('deskripsi'); ?>
                </div>
            </div>

        </div>
        <div class="form-group row">
            <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
            <div class="col-sm-10">
                <select name="kategori" class="form-control" id="kategori" required>
                    <option value="" hidden></option>
                    <?php foreach ($kategori as $key => $value) : ?>
                        <option value="<?= $value['kategori_id'] ?>" <?= $menu['kategori'] == $value['kategori_id'] ? 'selected' : null  ?>>
                            <?= $value['kategori_nama'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

        </div>
        <div class="form-group row">
            <label for="foto" class="col-sm-2 col-form-label">Foto</label>
            <div class="col-sm-2">
                <img src="/img/<?= $menu['foto']; ?>" class="img-thumbnail img-preview">
            </div>
            <div class="col-sm-8">
                <div class="custom-file">
                    <input type="file" class="custom-file-input <?= ($validation->hasError('foto')) ? 'is-invalid' : '' ?>" id="foto" name="foto" onchange="previewImg()">
                    <label class="custom-file-label" for="foto"><?= $menu['foto']; ?></label>

                    <div class="invalid-feedback">
                        <?= $validation->getError('foto'); ?>
                    </div>
                </div>

            </div>

        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </div>
        </div>
    </form>
</div>
<?= $this->endSection(); ?>