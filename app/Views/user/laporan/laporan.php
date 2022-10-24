<?= $this->extend('template/indexuser'); ?>
<?= $this->section('page-content'); ?>

<div class="row">
    <div class="col-sm-12 grid-margin">
        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-info" role="alert">
                <?= session()->getFlashdata('pesan') ?>
            </div>
        <?php endif ?>
        <!-- <a href="/admin/laporan/create" class="btn btn-primary">Tambah Data</a> -->
        <table class="table">
            <thead>
                <tr>
                    <!-- <th scope="col" width="20%">Foto</th>
                                                <th scope="col" width="20%">Judul</th> -->
                    <th scope="col" width="60%">Laporan</th>
                    <!-- <th scope="col" width="30%">Nama File</th> -->
                    <th scope="col" width="40%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($laporan as $laporan) : ?>
                    <tr>
                        <td><?= $laporan['judul']; ?></td>
                        <!-- <td><?= $laporan['nama_file']; ?></td> -->
                        <td>
                            <a href="<?= base_url('laporan/download/' . $laporan['id']); ?>" class="btn btn-info"><i class="fa-solid fa-download"></i> Unduh.</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?= $pager->links('laporan', 'pagination'); ?>
    </div>
</div>

<?= $this->endSection(); ?>