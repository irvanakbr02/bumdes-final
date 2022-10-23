<?= $this->extend('template/indexuser'); ?>
<?= $this->section('page-content'); ?>

<div class="row">
    <?php foreach ($visi as $visi) : ?>
        <h5 class="card-title">Visi Misi Bumdesa Tambaknegara</h5>
        <p>
            <?= $visi['visi']; ?>
        </p>
    <?php endforeach; ?>
</div>

<?= $this->endSection(); ?>