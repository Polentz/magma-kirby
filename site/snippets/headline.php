<div class="headline-block" data-filter="<?= $event->filter()->slug() ?>">
    <?php if ($page->is('home')) : ?>
        <div class="headline-cover">
            <?php if ($cover = $event->cover()->toFile()) : ?>
                <img 
                    loading="lazy"
                    src="<?= $cover->crop(1200, 750, 72)->placeholderUri() ?>"
                    data-src="<?= $cover->crop(1200, 750, 72)->url() ?>"
                    data-lazyload 
                    alt="<?= $cover->alt() ?>" 
                    width="100%"
                    data-sizes="auto"
                >
            <?php endif ?>
        </div>
    <?php endif ?>
    <div class="headline-data">
        <div class="date">
            <?php if ($event->date()->isNotEmpty()) : ?>
                <p><?= $event->date()->toDate('d/m/Y') ?></p>
            <?php elseif ($event->years()->isNotEmpty()) : ?>
                <p><?= $event->years()->inline() ?></p>
            <?php endif ?>
        </div>
        <div class="title">
            <?php if ($page->is('home') && $event->pagestatus()->isTrue()) : ?>
                <a href="<?= $event->url() ?>"><h2><?= $event->name() ?></h2></a>
            <?php else : ?>
                <h2><?= $event->name() ?></h2>
            <?php endif ?>
            <p><?= $event->type() ?></p>
        </div>
        <div class="location">
            <p><?= $event->location() ?></p>
        </div>
    </div>
</div>