<?= $this->extend('template/indexuser'); ?>
<?= $this->section('page-content'); ?>

<div class="row">
    <?php foreach ($menu as $menu) : ?>
        <!-- <h4>Menu <?= $menu['kategori']; ?></h4> -->

        <div class="col-12 col-md-6 col-lg-4 mb-3">
            <div class="card">
                <img src="/img/<?= $menu['foto']; ?>" class="card-img-top" alt="..." width="300px" height="250px">
                <div class="card-body">
                    <h5 class="card-title"><?= $menu['nama']; ?></h5>
                    <a href="/menu/detail/<?= $menu['slug']; ?>" class="btn btn-success">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?= $this->endSection(); ?>