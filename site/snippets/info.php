<div class="info-wrapper">
    <div class="info-column">
        <?= $page->lefttext()->kt() ?>
        <?php if ($page->logo()->isNotEmpty()) : ?>
            <div class="logo-wrapper">
            <?php foreach ($page->logo()->toFiles() as $logo) : ?>
                <img src="<?= $logo->url() ?>" alt="<?= $logo->alt() ?>">
            <?php endforeach ?>
            </div>
        <?php endif ?>
        <?php if ($pdf = $page->pdf()->toFile()) : ?>
            <p><a class="menu-link" href="<?= $pdf->url() ?>" target="_blank" rel="noopener noreferrer"><?= $pdf->linkName() ?></a></p>
        <?php endif ?>
    </div>
    <div class="info-column">
        <?= $page->righttext()->kt() ?>
    </div>
</div>