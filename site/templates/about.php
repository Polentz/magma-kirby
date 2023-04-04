<?= snippet('header') ?>
<?= snippet('menu') ?>

<main>
    <section class="section-wrapper">
        <?= snippet('info') ?>
    </section>
</main>

<div id="trasparenza" class="popup">
    <div class="popup-wrapper">
        <div class="popup-content">
            <div class="popup-blocks">
                <?php foreach ($page->popupBlocks()->toBlocks() as $block): ?>
                    <?= $block ?>
                <?php endforeach ?>
            </div>
        </div>
        <svg class="popup-close" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 13L13 1.00001M1 1L13 13"/>
        </svg>
    </div>
</div>
<?= snippet('footer') ?>