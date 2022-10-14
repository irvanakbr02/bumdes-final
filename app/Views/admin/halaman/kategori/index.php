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

            <?php foreach ($kategori as $kategori) : ?>
                <tr>
                    <td><?= $kategori['kategori_id']; ?></td>
                    <td><?= $kategori['kategori_nama']; ?></td>
                    <td>
                        <form action="/admin/kategori/<?= $kategori['kategori_id']; ?>" method="POST" class="d-inline">
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
</div>

<?= $this->endSection(); ?>