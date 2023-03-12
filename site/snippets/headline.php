<div class="headline-block" data-filter="<?= $event->filter()->slug() ?>">
    <?php if ($page->is('home')) : ?>
        <div class="headline-cover">
            <?php if ($cover = $event->cover()->toFile()) : ?>
                <img src="<?= $cover->crop(1200, 750, 72)->url() ?>" alt="<?= $cover->alt() ?>">
            <?php endif ?>
        </div>
    <?php endif ?>
    <div class="headline-data">
        <div class="date">
            <?php if ($event->date()->isNotEmpty()) : ?>
                <h3><?= $event->date()->toDate('d/m/Y') ?></h3>
            <?php elseif ($event->years()->isNotEmpty()) : ?>
                <h3><?= $event->years()->inline() ?></h3>
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