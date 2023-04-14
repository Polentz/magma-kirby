<?php if ($page->is('home')) : ?>
    <div class="submenu-wrapper on-mobile">
        <h1 class="page-title <?= $page->template() ?> <?= e($page->isOpen(), 'current') ?>"><?= $page->title() ?></h1>
        <?php foreach ($page->filters()->toStructure() as $filter): ?>
            <a class="menu-link filter" data-filter="<?= $filter->filter()->slug() ?>"><?= $filter->filter()->inline() ?></a>
        <?php endforeach ?>
    </div>
<?php endif ?>

<?php if ($page->is('about')) : ?>
    <div class="submenu-wrapper on-mobile">
        <p id="support-open-menu" class="menu-link popup-open">Sostieni MAGMA</p>
        <a class="menu-link" href="<?= $page->subscribe()->url() ?>" target="_blank" rel="noopener noreferrer">Newsletter</a>
    </div>
<?php endif ?>

<?php if ($page->is('projects')) : ?>
    <div class="submenu-wrapper on-mobile">
        <h1 class="page-title <?= $page->template() ?> <?= e($page->isOpen(), 'current') ?>"><?= $page->title() ?></h1>
        <?php foreach ($page->children()->listed() as $project) : ?>
            <a class="menu-link js-href" href="#<?= $project->title()->slug() ?>"><?= $project->title() ?></a>
        <?php endforeach ?>
    </div>
<?php endif ?>