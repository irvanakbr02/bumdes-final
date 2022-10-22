<?= $this->extend('template/indexuser'); ?>
<?= $this->section('page-content'); ?>

<div class="row">
    <h1 class="h3 mb-4 text-gray-800">Berita Bumdes</h1>
    <img src="/img/<?= $berita['foto']; ?>" alt=".. " class="img-fluid" />
    <div class="col-sm-12 grid-margin">
        <h2 class="font-weight-600 mb-2 mt-4">
            <?= $berita['judul']; ?>
        </h2>
        <p class="fs-13 text mb">
            ditulis oleh <span class="mr-2"><?= $berita['penulis']; ?> </span>
        </p>
        <p class="fs-15">
            <?= $berita['deskripsi']; ?>
        </p>

    </div>

</div>

<?= $this->endSection(); ?>