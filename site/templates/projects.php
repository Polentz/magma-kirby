<?= snippet('header') ?>
<?= snippet('menu') ?>

<main>
    <section class="event-gallery">
        <div class="gallery-wrapper">
            <?php foreach ($page->gallery()->toFiles() as $image) : ?>
                <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
            <?php endforeach ?>
            <?php if ($video = $page->video()->toFile()) : ?>
                <video controls src="<?= $video->url() ?>"></video>
            <?php endif ?>
        </div>
    </section>

    <section class="event-info">
        <?= snippet('event', ['event' => $page]) ?>
    </section>
</main>

<?= snippet('footer') ?>