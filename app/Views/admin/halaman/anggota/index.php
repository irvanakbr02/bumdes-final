<?= $this->extend('template/index'); ?>
<?= $this->section('page-content'); ?>

<div class="row">
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-info" role="alert">
            <?= session()->getFlashdata('pesan') ?>
        </div>
    <?php endif ?>
    <h1 class="font-weight-600 mb-4">
        Data Anggota
    </h1>
    <!-- <a href="/admin/anggota/create" class="btn btn-primary">Tambah Data</a> -->
    <table class="table">
        <thead>
            <tr>
                <th scope="col" width="20%">Foto</th>
                <th scope="col" width="20%">Nama</th>
                <th scope="col" width="20%">Periode</th>
                <th scope="col" width="20%">Jabatan</th>
                <th scope="col" width="20%">Alamat</th>
                <th scope="col" width="20%">Aksi</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($anggota as $anggota) : ?>
                <tr>
                    <td><img src="/img/pengurus/<?= $anggota['foto']; ?>" alt="" class="" width="300px" height="250px"></td>
                    <td><?= $anggota['nama']; ?></td>
                    <td><?= $anggota['periode']; ?></td>
                    <td><?= $anggota['jabatan']; ?></td>
                    <td><?php echo substr($anggota['alamat'], 0, 100) . "..";  ?></td>
                    <td>
                        <a href="/admin/profil/anggota/edit/<?= $anggota['id']; ?>" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i> Edit</a>

                        <form action="/admin/profil/anggota/<?= $anggota['id']; ?>" method="POST" class="d-inline">
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
        <a class="btn btn-info mt-4" href="/admin/profil/anggota/create">Tambah Anggota Baru</a>
    </div>
</div>

<?= $this->endSection(); ?>