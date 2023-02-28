<?= snippet('header') ?>
<?= snippet('menu') ?>

<main>
    <section class="about-info">
        <div class="info-wrapper">
            <div class="info-column">
                <?= $page->lefttext()->kt() ?>
                <?php if ($pdf = $page->pdf()->toFile()) : ?>
                    <p><a class="menu-link" href="<?= $pdf->url() ?>" target="_blank" rel="noopener noreferrer"><?= $pdf->linkName() ?></a></p>
                <?php endif ?>
            </div>
            <div class="info-column">
                <?= $page->righttext()->kt() ?>
            </div>
        </div>
    </section>
</main>

<?= snippet('footer') ?>