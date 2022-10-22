<?= $this->extend('template/index'); ?>
<?= $this->section('page-content'); ?>

<div class="row">
    <div class="container">
        <div class="row text-center mb-3">
            <div class="col">
                <h2>Hubungi Kami</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <?php if (session()->getFlashdata('pesan')) : ?>
                    <div class="alert alert-info" role="alert">
                        <?= session()->getFlashdata('pesan') ?>
                    </div>
                <?php endif ?>
                <form action="/kontak/save" method="POST" name="wpu-contact-form">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="name" aria-describedby="name" name="nama" />
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="email" name="email" />
                    </div>
                    <div class="mb-3">
                        <label for="pesan" class="form-label">Pesan</label>
                        <textarea class="form-control" id="pesan" rows="3" name="pesan"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-kirim">Kirim</button>

                    <button class="btn btn-primary btn-loading d-none" type="button" disabled>
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        Loading...
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>