<?= $this->extend('template/index'); ?>
<?= $this->section('page-content'); ?>


<div class="row">
    <div class="container">
        <h1 class="font-weight-600 mb-4">
            Edit data laporan
        </h1>
        <form action="/admin/laporan/update/<?= $laporan['id']; ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group row">
                <?= csrf_field(); ?>
                <input type="hidden" name="slug" id="slug" value="<?= $laporan['slug']; ?>">
                <input type="hidden" name="fileLama" value="<?= $laporan['nama_file']; ?>">
                <label for="judul" class="col-sm-2 col-form-label">Judul Laporan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : '' ?>" id="judul" name="judul" value="<?= (old('judul')) ? old('judul') : $laporan['judul'] ?>" autofocus>
                    <div class="invalid-feedback">
                        <?= $validation->getError('judul'); ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama_file" class="col-sm-2 col-form-label">File</label>
                <!-- <div class="col-sm-2">
                    <img src="/img/default.jpg" class="img-thumbnail img-preview">
                </div> -->
                <div class="col-sm-10">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input <?= ($validation->hasError('nama_file')) ? 'is-invalid' : '' ?>" id="nama_file" name="nama_file" onchange="previewImg()">
                        <label class="custom-file-label" for="nama_file"><?= $laporan['nama_file']; ?></label>

                        <div class="invalid-feedback">
                            <?= $validation->getError('nama_file'); ?>
                        </div>
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