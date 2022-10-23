<?= $this->extend('template/indexuser'); ?>

<?= $this->section('page-content'); ?>
<div class="row">
    <h1 class="h3 mb-4 text-gray-800">Data Menu </h1>
    <h4><?= $menu['nama']; ?></h4>
    <h4><img src="/img/<?= $menu['foto']; ?>" alt=""></h4>
    <h4><?= $menu['deskripsi']; ?></h4>
    <h4>Kategori : <?= $menu['kategori']; ?></h4>
</div>
<?= $this->endSection(); ?>