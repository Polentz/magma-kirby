<?= snippet('header') ?>
<?= snippet('menu') ?>

<main>
    <section class="section-wrapper">
        <div class="gallery-section">
            <?= snippet('gallery') ?>
        </div>
        <div class="info-section">
            <?= snippet('headline', ['event' => $page]) ?>
            <?= snippet('info') ?>
        </div>
    </section>
</main>

<?= snippet('footer') ?>