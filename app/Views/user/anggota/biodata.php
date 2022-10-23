<?= $this->extend('template/indexuser'); ?>
<?= $this->section('page-content'); ?>

<div class="row">
    <h1 class="h3 mb-4 text-gray-800">Biodata Pengurus Bumdesa Tambaknegara</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col" width="20%">Foto</th>
                <th scope="col" width="20%">Nama</th>
                <th scope="col" width="20%">Periode</th>
                <th scope="col" width="20%">Jabatan</th>
                <th scope="col" width="20%">Alamat</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($anggota as $anggota) : ?>
                <tr>
                    <td><img src="/img/pengurus/<?= $anggota['foto']; ?>" alt="" class="foto-pengurus"></td>
                    <td><?= $anggota['nama']; ?></td>
                    <td><?= $anggota['periode']; ?></td>
                    <td><?= $anggota['jabatan']; ?></td>
                    <td><?php echo substr($anggota['alamat'], 0, 100) . "..";  ?></td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection(); ?>