<div class="gallery-wrapper">
    <div class="overlay"></div>
    <?php foreach ($page->gallery()->toFiles() as $image) : ?>
        <img src="<?= $image->resize(1200, null)->url() ?>" alt="<?= $image->alt() ?>">
    <?php endforeach ?>
    <?php if ($video = $page->video()->toFile()) : ?>
        <video controls autoplay muted loop>
            <source src="<?= $video->url() ?>" type="video/mp4">
        </video>
    <?php endif ?>
</div>