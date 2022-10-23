<?= $this->extend('template/indexuser'); ?>
<?= $this->section('page-content'); ?>

<div class="row">
    <h1 class="h3 mb-4 text-gray-800">Struktur Pengurus Bumdesa Tambaknegara</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col" width="20%">Nama</th>
                <th scope="col" width="20%">Periode</th>
                <th scope="col" width="20%">Jabatan</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($anggota as $anggota) : ?>
                <tr>
                    <td><?= $anggota['nama']; ?></td>
                    <td><?= $anggota['periode']; ?></td>
                    <td><?= $anggota['jabatan']; ?></td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <p class="font-medium leading-relaxed text-slate-300 mb-4 mt-5">
        Berikut Merupakan File Persetujuan Kementerian Desa, Pembangunan Daerah Tertinggal Dan Transmigrasi Republik Indonesia Atas Pendaftaran Nama Bum Desa/Bum Desa Bersama Tambaknegara Berkarya</p>

    <div class="col-sm-4 grid-margin">
        <button class="btn btn-info">
            <a href="https://drive.google.com/uc?export=download&id=17fntIYPIylK7z2Kk9GN1p6Qdfjddpwjv" download class="download-button">
                Download File
            </a>
        </button>
    </div>
</div>

<?= $this->endSection(); ?>