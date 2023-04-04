<div class="info-wrapper">
    <div class="info-column">
        <?= $page->lefttext()->kt() ?>
        <?php if ($page->logo()->isNotEmpty()) : ?>
            <div class="logo-wrapper">
            <?php foreach ($page->logo()->toFiles() as $logo) : ?>
                <img src="<?= $logo->resize(800, null)->url() ?>" alt="<?= $logo->alt() ?>">
            <?php endforeach ?>
            </div>
        <?php endif ?>
    </div>
    <div class="info-column">
        <?= $page->righttext()->kt() ?>
        <?php if ($page->is('about')) : ?>
            <p><a class="about-popup-open">TRASPARENZA</a></p>
        <?php endif ?>
    </div>
</div>