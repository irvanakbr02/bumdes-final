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
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $i = 1;
                foreach ($menu as $menu) : ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $menu['nama']; ?></td>
                        <td><?php echo substr($menu['deskripsi'], 0, 50) . "..";  ?></td>
                        <td><?= $menu['kategori_nama']; ?></td>
                        <td>
                            <a href="<?= '/admin/menu/detail/' . $menu['slug']; ?>" class="btn btn-info">Detail</a>
                            <a href="/admin/menu/edit/<?= $menu['slug']; ?>" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i> Edit</a>

                            <form action="/admin/menu/<?= $menu['id']; ?>" method="POST" class="d-inline">
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
            <a class="btn btn-info mt-4" href="/admin/menu/create">Tambah Data </a>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>