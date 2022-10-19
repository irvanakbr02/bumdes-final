<?= $this->extend('template/index'); ?>
<?= $this->section('page-content'); ?>

<div class="row">
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-info" role="alert">
            <?= session()->getFlashdata('pesan') ?>
        </div>
    <?php endif ?>
    <h1 class="font-weight-600 mb-4">
        Kategori Menu
    </h1>
    <!-- <a href="/admin/periode/create" class="btn btn-primary">Tambah Data</a> -->
    <table class="table">
        <thead>
            <tr>
                <th scope="col" width="30%">No</th>
                <th scope="col" width="30%">Periode</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $i = 1;
            foreach ($periode as $periode) : ?>
                <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td><?= $periode['periode']; ?></td>
                    <td>
                        <a href="/admin/profil/periode/edit/<?= $periode['periode_id']; ?>" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i> Edit</a>

                        <form action="/admin/profil/periode/<?= $periode['periode_id']; ?>" method="POST" class="d-inline">
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
        <a class="btn btn-info mt-4" href="/admin/profil/periode/create">Tambah Periode</a>
    </div>
</div>

<?= $this->endSection(); ?>