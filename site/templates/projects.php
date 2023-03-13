<?= snippet('header') ?>
<?= snippet('menu') ?>

<?php foreach($page->children()->listed() as $project) : ?>
    <section id="<?= $project->title()->slug() ?>" class="section-wrapper">
        <div class="gallery-section">
            <?= snippet('gallery', ['page' => $project]) ?>
        </div>
        <div class="info-section">
            <?= snippet('headline', ['event' => $project]) ?>
            <?= snippet('info', ['page' => $project]) ?>
        </div>
    </section>
<?php endforeach ?>

<?= snippet('footer') ?>