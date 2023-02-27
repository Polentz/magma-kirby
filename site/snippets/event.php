<div class="event-block" data-filter="<?= $event->filter()->slug() ?>">
    <?php if ($page->isHomePage()) : ?>
        <div class="event-cover">
            <?php if ($cover = $event->cover()->toFile()) : ?>
                <img src="<?= $cover->url() ?>" alt="<?= $cover->alt() ?>">
            <?php endif ?>
        </div>
    <?php endif ?>
    <div class="event-data">
        <div class="date">
            <h3><?= $event->date()->toDate('d/m/Y') ?></h3>
        </div>
        <div class="title">
            <?php if ($page->isHomePage()) : ?>
                <a href="<?= $event->url() ?>"><h2><?= $event->name() ?></h2></a>
            <?php elseif ($page->pages('event')) : ?>
                <h2><?= $event->name() ?></h2>
            <?php endif ?>
            <p><?= $event->type() ?></p>
        </div>
        <div class="location">
            <p><?= $event->location() ?></p>
        </div>
    </div>
</div>