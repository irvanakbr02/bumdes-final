<?= $this->extend('template/index'); ?>
<?= $this->section('page-content'); ?>

<div class="row">
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-info" role="alert">
            <?= session()->getFlashdata('pesan') ?>
        </div>
    <?php endif ?>
    <h1 class="font-weight-600 mb-4">
        Data Artikel
    </h1>
    <!-- <a href="/admin/berita/create" class="btn btn-primary">Tambah Data</a> -->
    <table class="table">
        <thead>
            <tr>
                <th scope="col" width="20%">Foto</th>
                <th scope="col" width="20%">Judul</th>
                <th scope="col" width="20%">Penulis</th>
                <th scope="col" width="20%">Tanggal</th>
                <th scope="col" width="20%">Deskripsi</th>
                <th scope="col" width="20%">Aksi</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($berita as $berita) : ?>
                <tr>
                    <td><img src="/img/<?= $berita['foto']; ?>" alt="" class="" width="300px" height="250px"></td>
                    <td><?= $berita['judul']; ?></td>
                    <td><?= $berita['penulis']; ?></td>
                    <td><?= $berita['created_at']; ?></td>
                    <td><?php echo substr($berita['deskripsi'], 0, 50) . "..";  ?></td>
                    <td>
                        <a href="/admin/berita/edit/<?= $berita['slug']; ?>" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i> Edit</a>

                        <form action="/admin/berita/<?= $berita['id']; ?>" method="POST" class="d-inline">
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
        <a class="btn btn-info mt-4" href="/admin/berita/create">Tambah Data Berita</a>
    </div>
</div>

<?= $this->endSection(); ?>