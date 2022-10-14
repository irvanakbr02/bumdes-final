<?= $this->extend('template/index'); ?>
<?= $this->section('page-content'); ?>

<div class="row">
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-info" role="alert">
            <?= session()->getFlashdata('pesan') ?>
        </div>
    <?php endif ?>
    <!-- <a href="/admin/laporan/create" class="btn btn-primary">Tambah Data</a> -->
    <h1 class="font-weight-600 mb-4">
        Data Laporan
    </h1>
    <table class="table">
        <thead>
            <tr>
                <!-- <th scope="col" width="20%">Foto</th>
                                                <th scope="col" width="20%">Judul</th> -->
                <th scope="col" width="30%">Laporan</th>
                <th scope="col" width="30%">Nama File</th>
                <th scope="col" width="30%">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($laporan as $laporan) : ?>
                <tr>
                    <td><?= $laporan['judul']; ?></td>
                    <td><?= $laporan['nama_file']; ?></td>
                    <td>
                        <a href="/admin/laporan/edit/<?= $laporan['slug']; ?>" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i> Edit</a>

                        <form action="/admin/laporan/<?= $laporan['id']; ?>" method="POST" class="d-inline">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <Button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');">
                                <i class="fa-solid fa-trash-can"></i> Delete
                            </Button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>
    <div>
        <a class="btn btn-info mt-4" href="/admin/laporan/create">Tambah Data Laporan</a>
    </div>
</div>
</div>

<?= $this->endSection(); ?>