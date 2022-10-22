<?= $this->extend('template/index'); ?>
<?= $this->section('page-content'); ?>

<div class="row">
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-info" role="alert">
            <?= session()->getFlashdata('pesan') ?>
        </div>
    <?php endif ?>
    <h1 class="font-weight-600 mb-4">
        Data Pesan masuk
    </h1>
    <!-- <a href="/admin/pesan/create" class="btn btn-primary">Tambah Data</a> -->
    <table class="table">
        <thead>
            <tr>
                <th scope="col" width="30%">Nama</th>
                <th scope="col" width="30%">Email</th>
                <th scope="col" width="30%">Pesan</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($pesan as $pesan) : ?>
                <tr>
                    <td><?= $pesan['nama']; ?></td>
                    <td><?= $pesan['email']; ?></td>
                    <td><?php echo substr($pesan['pesan'], 0, 50) . "..";  ?></td>
                    <td>

                        <form action="/admin/kontak/<?= $pesan['id']; ?>" method="POST" class="d-inline">
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