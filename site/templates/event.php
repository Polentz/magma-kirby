<?= snippet('header') ?>
<?= snippet('menu') ?>

<main>
    <section class="event-gallery">
        <div class="gallery-wrapper">
            <?php foreach ($page->gallery()->toFiles() as $image) : ?>
                <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
            <?php endforeach ?>
            <?php if ($video = $page->video()->toFile()) : ?>
                <video controls autoplay muted loop>
                    <source src="<?= $video->url() ?>" type="video/mp4">
                </video>
            <?php endif ?>
        </div>

    </section>

    <section class="event-info">
        <?= snippet('event', ['event' => $page]) ?>
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
            </div>
            <div class="info-column">
                <?= $page->righttext()->kt() ?>
            </div>
        </div>
    </section>
</main>

<?= snippet('footer') ?>