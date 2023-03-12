<header>
    <div class="menu">
        <div class="menu-block">
            <h1 class="menu-link page-title <?= $page->template() ?>"><?= $page->title() ?></h1>
            <?php if ($page->is('home')) : ?>
                <?php foreach ($filters as $filter) : ?>
                    <?php if ($filter->isNotEmpty()) : ?>
                        <a class="menu-link filter" data-filter="<?= $filter->inline()->slug() ?>"><?= $filter->inline() ?></a>
                    <?php endif ?>
                <?php endforeach ?>
            <?php endif ?>
            <?php if ($page->is('about')) : ?>
                <a class="menu-link" href="<?= $site->support()->url() ?>" target="_blank" rel="noopener noreferrer">Sostieni MAGMA</a>
                <a class="menu-link" href="<?= $page->subscribe()->url() ?>" target="_blank" rel="noopener noreferrer">Newsletter</a>
            <?php endif ?>
            <?php if ($page->is('projects')) : ?>
                <?php foreach ($page->children()->listed() as $project) : ?>
                    <a class="menu-link js-href" href="#<?= $project->title()->slug() ?>"><?= $project->title() ?></a>
                <?php endforeach ?>
            <?php endif ?>
        </div>
        <div class="menu-block">
            <a id="menu-open" class="menu-link">Menu</a>
            <svg id="menu-close" class="menu-close" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 13L13 1.00001M1 1L13 13"/>
            </svg>
        </div>
    </div>
    <div class="submenu">
        <div class="menu-block">
            <div class="submenu-wrapper">
                <a href="<?= $site->instagram() ?>" target="_blank" rel="noopener noreferrer">
                    <svg viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13 18.2174C15.8815 18.2174 18.2174 15.8815 18.2174 13C18.2174 10.1185 15.8815 7.78261 13 7.78261C10.1185 7.78261 7.78259 10.1185 7.78259 13C7.78259 15.8815 10.1185 18.2174 13 18.2174Z"/>
                    <path d="M18.7391 1H7.26087C3.80309 1 1 3.80309 1 7.26087V18.7391C1 22.1969 3.80309 25 7.26087 25H18.7391C22.1969 25 25 22.1969 25 18.7391V7.26087C25 3.80309 22.1969 1 18.7391 1Z"/>
                    <path d="M19.7826 7.78261C20.6471 7.78261 21.3478 7.08184 21.3478 6.21739C21.3478 5.35295 20.6471 4.65218 19.7826 4.65218C18.9182 4.65218 18.2174 5.35295 18.2174 6.21739C18.2174 7.08184 18.9182 7.78261 19.7826 7.78261Z"/>
                    </svg>
                </a>
                <a href="<?= $site->facebook() ?>" target="_blank" rel="noopener noreferrer">
                    <svg viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13 25C19.6274 25 25 19.6274 25 13C25 6.37258 19.6274 1 13 1C6.37258 1 1 6.37258 1 13C1 19.6274 6.37258 25 13 25ZM13 25L13 11C12.9983 10.6056 13.0748 10.2147 13.225 9.84999C13.3752 9.48527 13.5961 9.15389 13.875 8.87499C14.1539 8.59608 14.4853 8.37517 14.85 8.22499C15.2147 8.07481 15.6056 7.99834 16 8H18M9 15H17"/>
                    </svg>
                </a>
                <a href="mailto:<?= $site->email() ?>" target="_blank" rel="noopener noreferrer">
                    <svg viewBox="0 0 26 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1H25M1 1V18C1 18.2652 1.10536 18.5196 1.29289 18.7071C1.48043 18.8946 1.73478 19 2 19H24C24.2652 19 24.5196 18.8946 24.7071 18.7071C24.8946 18.5196 25 18.2652 25 18V1M1 1L13 12L25 1"/>
                    </svg>
                </a>
            </div>
            <div class="submenu-wrapper">
                <?php foreach ($pages->unlisted()->not('error') as $page) : ?>
                    <a href="<?= $page->url() ?>" class="menu-link <?= e($page->isOpen(), 'current') ?>"><?= $page->title() ?></a>
                <?php endforeach ?>
            </div>
            <?= snippet('mobile-submenu') ?>
        </div>
    </div>
</header>