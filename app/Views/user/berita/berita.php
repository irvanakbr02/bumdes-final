<?= $this->extend('template/indexuser'); ?>
<?= $this->section('page-content'); ?>

<div class="row">
    <h1 class="h3 mb-4 text-gray-800">Berita Bumdes</h1>
    <?php foreach ($berita as $berita) : ?>
        <div class="col-sm-4 grid-margin">
            <div class="rotate-img">
                <img src="/img/<?= $berita['foto']; ?>" alt="foto" class="img-fluid" />
            </div>
        </div>
        <div class="col-sm-8 grid-margin">
            <h2 class="font-weight-600 mb-2">
                <?= $berita['judul']; ?>
            </h2>
            <p class="fs-13 text-muted mb-0">
                <span class="mr-2">Penulis : <?= $berita['penulis']; ?> </span>
            </p>

            <p class="fs-15">
                <?php echo substr($berita['deskripsi'], 0, 200) . "..";  ?>


                <a href="/berita/<?= $berita['slug']; ?>" class="">Baca Selengkapnya</a>
            </p>
        </div>
    <?php endforeach; ?>

</div>

<?= $this->endSection(); ?>