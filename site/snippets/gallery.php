<div class="gallery-wrapper">
    <div class="overlay" aria-hidden="true"></div>
    <?php foreach ($page->gallery()->toFiles() as $image) : ?>
        <img 
            loading="lazy"
            src="<?= $image->resize(1200, null)->placeholderUri() ?>"
            data-src="<?= $image->resize(1200, null)->url() ?>"
            data-lazyload 
            aria-hidden="true"
            width="100%"
            data-sizes="auto"        
        >
    <?php endforeach ?>
</div>
<?php if ($page->video()->isNotEmpty()) : ?>
<div class="video-wrapper">
    <div class="overlay" aria-hidden="true"></div>
    <?php foreach ($page->video()->toFiles() as $video) : ?>
        <figure aria-hidden="true">
            <video controls muted loading="lazy" src="<?= $video->url() ?>" type="video/mp4"></video>
            <?php if ($video->caption()->isNotEmpty()) : ?>
                <figcaption>
                    <?= $video->caption()->kt() ?>
                </figcaption>
            <?php endif ?>
        </figure>
    <?php endforeach ?>
</div>
<?php endif ?>