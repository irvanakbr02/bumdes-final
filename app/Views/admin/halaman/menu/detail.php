<?= $this->extend('template/indexuser'); ?>

<?= $this->section('page-content'); ?>
<div class="row">
    <!-- <h1 class="h3 mb-4 text-gray-800">Data Menu </h1> -->
    <h4><?= $menu['nama']; ?></h4>
    <h4><img src="/img/<?= $menu['foto']; ?>" class="fotomenu" alt=""></h4>
    <h4><?= $menu['deskripsi']; ?></h4>
    <!-- <div style="position: relative; padding-bottom: 100%; height: 0; padding-bottom: 56.2493%;">
        <iframe src="https://www.youtube.com/embed/${ videoId }" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0;" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
        </iframe>
    </div> -->

    <h4>Kategori : <?= $menu['kategori']; ?></h4>
</div>
<?= $this->endSection(); ?>