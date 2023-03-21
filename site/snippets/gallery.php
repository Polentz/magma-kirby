<div class="gallery-wrapper">
    <div class="overlay"></div>
    <?php foreach ($page->gallery()->toFiles() as $image) : ?>
        <img 
            loading="lazy"
            src="<?= $image->resize(1200, null)->placeholderUri() ?>"
            data-src="<?= $image->resize(1200, null)->url() ?>"
            data-lazyload 
            alt="<?= $image->alt() ?>"
            width="100%"
            data-sizes="auto"        
        >
    <?php endforeach ?>
    <?php if ($video = $page->video()->toFile()) : ?>
        <video controls autoplay muted loop>
            <source src="<?= $video->url() ?>" type="video/mp4">
        </video>
    <?php endif ?>
</div>