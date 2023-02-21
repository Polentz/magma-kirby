<div class="event-block" data-filter="<?= $event->filter()->slug() ?>">
    <div class="event-cover">
        <img src="<?= $event->image()->url() ?>" alt="<?= $event->image()->alt() ?>">
    </div>
    <div class="event-data">
        <div class="date">
            <h3><?= $event->date()->toDate('d/m/Y') ?></h3>
        </div>
        <div class="title">
            <a href="<?= $event->url() ?>"><h2><?= $event->name() ?></h2></a>
            <p><?= $event->type() ?></p>
        </div>
        <div class="location">
            <p><?= $event->location() ?></p>
        </div>
    </div>
</div>