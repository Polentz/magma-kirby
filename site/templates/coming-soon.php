<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if($page->isHomePage()) : ?>
        <title><?= $site->title() ?></title>
    <?php else : ?>
        <title><?= $site->title() ?> | <?= $page->title() ?></title>
    <?php endif ?>
    <meta name="description"
        content="<?= $site->description() ?>">
    <link rel="canonical" href="<?= $page->url() ?>">
    <meta name="keywords"
        content="<?= $site->keywords() ?>">
    <meta property="og:locale" content="it_IT">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= $site->title()->inline()?>">
    <meta property="og:description"
        content="<?= $site->description() ?>">
    <meta property="og:url" content="<?= $page->url() ?>">
    <meta property="og:site_name" content="<?= $site->title()->inline()?>">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:description"
        content="<?= $site->description() ?>">
    <meta name="twitter:title"
        content="<?= $site->description() ?>">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <link rel="stylesheet" href="https://use.typekit.net/mgw4tyk.css">
    <?= css ([
        'assets/css/base.css',
        'assets/css/style.css',
        '@auto',
    ]) ?>
</head>
<body>
    <section>
        <h1>MAGMA</h1>
        <p>The website is having a new restyling</p>
        <p>In the meanwhile stay updated on our social networks</p>
        <div>
            <a href="https://www.instagram.com/magma_it/" target="_blank" rel="noopener noreferrer">
                <svg xmlns="http://www.w3.org/2000/svg"
                    width="192" height="192" fill="#fff" viewBox="0 0 256 256">
                    <rect width="256" height="256" fill="none"></rect>
                    <circle cx="128" cy="128" r="40" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="8">
                    </circle>
                    <rect x="36" y="36" width="184" height="184" rx="48" fill="none" stroke="#fff"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="8"></rect>
                    <circle cx="180" cy="76" r="12"></circle>
                </svg>
            </a>
            <a href="https://www.facebook.com/MAGMAitalia" target="_blank" rel="noopener noreferrer">
                <svg xmlns="http://www.w3.org/2000/svg"
                    width="192" height="192" fill="#fff" viewBox="0 0 256 256">
                    <rect width="256" height="256" fill="none"></rect>
                    <circle cx="128" cy="128" r="96" fill="none" stroke="#fff" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="8"></circle>
                    <path d="M168,88H152a23.9,23.9,0,0,0-24,24V224" fill="none" stroke="#fff" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="8"></path>
                    <line x1="96" y1="144" x2="160" y2="144" fill="none" stroke="#fff" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="8"></line>
                </svg>
            </a>
        </div>
    </section>
    <div class="canvas-container">
        <canvas id="canvas"></canvas>
    </div>
    <?= js([
        '@auto',
    ]) ?>
</body>

</html>