<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-info" role="alert">
            <?= session()->getFlashdata('pesan') ?>
        </div>
    <?php endif ?>
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Semua Visi Dan Misi</h1>
    <div class="col-md-10">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Visi</th>
                    <th scope="col">Periode</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php
                foreach ($visi as $visi) : ?>
                    <tr>
                        <td><?php echo substr($visi['visi'], 0, 120) . "..";  ?></td>
                        <!-- <td><?= $visi['visi']; ?></td> -->
                        <td><?= $visi['periode']; ?></td>
                        <td>
                            <a href="/admin/profil/visi/edit/<?= $visi['id']; ?>" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i> Edit</a>

                            <form action="/admin/profil/visi/<?= $visi['id']; ?>" method="POST" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <Button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');">
                                    <i class="fa-solid fa-trash-can"></i>
                                    Delete
                                </Button>
                            </form>
                        </td>
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