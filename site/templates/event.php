<?= snippet('header') ?>
<?= snippet('menu') ?>

<main>
    <section class="gallery-section">
        <?= snippet('gallery') ?>
    </section>

    <section class="info-section">
        <?= snippet('headline', ['event' => $page]) ?>
        <?= snippet('info') ?>
    </section>
</main>

<?= snippet('footer') ?>