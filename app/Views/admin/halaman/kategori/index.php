<?= $this->extend('template/index'); ?>
<?= $this->section('page-content'); ?>

<div class="row">
    <?php if (session()->getFlashdata('kategori')) : ?>
        <div class="alert alert-info" role="alert">
            <?= session()->getFlashdata('kategori') ?>
        </div>
    <?php endif ?>
    <h1 class="font-weight-600 mb-4">
        Kategori Menu
    </h1>
    <!-- <a href="/admin/kategori/create" class="btn btn-primary">Tambah Data</a> -->
    <table class="table">
        <thead>
            <tr>
                <th scope="col" width="30%">No</th>
                <th scope="col" width="30%">Nama Kategori</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $i = 1;
            foreach ($kategori as $kategori) : ?>
                <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td><?= $kategori['kategori_nama']; ?></td>
                    <td>
                        <a href="/admin/menu/kategori/edit/<?= $kategori['kategori_id']; ?>" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i> Edit</a>

                        <form action="/admin/menu/kategori/<?= $kategori['kategori_id']; ?>" method="POST" class="d-inline">
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
        <a class="btn btn-info mt-4" href="/admin/menu/kategori/create">Tambah Kategori Baru </a>
    </div>
</div>

<?= $this->endSection(); ?>