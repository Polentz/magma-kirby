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
        <?php if ($page->document()->isNotEmpty()) : ?>
            <?php foreach ($page->document()->toFiles() as $document) : ?>
                <a href="<?= $document->url() ?>" target="_blank" rel="noopener noreferrer"><?= $document->documentTitle() ?></a>
            <?php endforeach ?>
        <?php endif ?>
    </div>
</div>