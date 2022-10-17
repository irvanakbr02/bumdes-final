<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-info" role="alert">
            <?= session()->getFlashdata('pesan') ?>
        </div>
    <?php endif ?>
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Semua Data Menu</h1>
    <div class="col-md-10">
        <table class="table">
            <thead>
                <tr>

                    <th scope="col">Visi</th>
                    <th scope="col">Periode</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                <?php
                foreach ($visi as $visi) : ?>
                    <tr>
                        <td><?php echo substr($visi['visi'], 0, 50) . "..";  ?></td>
                        <td><?= $visi['periode']; ?></td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div>
            <a class="btn btn-info mt-4" href="/admin/profil/visi/create">Tambah Data </a>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>