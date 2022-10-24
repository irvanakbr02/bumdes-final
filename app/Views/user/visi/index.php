<?= $this->extend('template/indexuser'); ?>
<?= $this->section('page-content'); ?>

<div class="row">
    <h5 class="card-title">Visi Misi Bumdesa Tambaknegara</h5>

    <?php foreach ($visi as $visi) : ?>

        <?= $visi['visi']; ?>

    <?php endforeach; ?>
</div>

<?= $this->endSection(); ?>