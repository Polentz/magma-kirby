<?= snippet('header') ?>
<?= snippet('menu') ?>

<?php foreach($page->children()->listed() as $project) : ?>
    <main id="<?= $project->title()->slug() ?>" class="project-wrapper">
        <section class="gallery-section">
            <?= snippet('gallery', ['page' => $project]) ?>
        </section>
        <section class="info-section">
            <?= snippet('headline', ['event' => $project]) ?>
            <?= snippet('info', ['page' => $project]) ?>
        </section>
    </main>
<?php endforeach ?>

<?= snippet('footer') ?>