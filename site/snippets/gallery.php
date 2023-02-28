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