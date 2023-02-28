<?= snippet('header') ?>
<?= snippet('menu') ?>

<main>
    <section class="gallery-section">
        <?= snippet('gallery') ?>
    </section>

    <section class="info-section">
        <?= snippet('event', ['event' => $page]) ?>
    </section>
</main>

<?= snippet('footer') ?>