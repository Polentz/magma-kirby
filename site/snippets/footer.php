    <div class="page-label">
        <svg viewBox="0 0 57 4" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M56.1768 2.17678C56.2744 2.07915 56.2744 1.92085 56.1768 1.82322L54.5858 0.232233C54.4882 0.134602 54.3299 0.134602 54.2322 0.232233C54.1346 0.329864 54.1346 0.488155 54.2322 0.585786L55.6464 2L54.2322 3.41421C54.1346 3.51184 54.1346 3.67014 54.2322 3.76777C54.3299 3.8654 54.4882 3.8654 54.5858 3.76777L56.1768 2.17678ZM0 2.25H56V1.75H0V2.25Z" fill="black"/>
        </svg>
        <p><a href="<?= $site->support()->url() ?>" target="_blank" rel="noopener noreferrer">Sostieni MAGMA</a></p>
    </div>
    <div id="cursor" class="cursor">
        <div class="inner-cursor"></div>
    </div>
    <footer>
        <p><?= $site->footer() ?> © MAGMA</p>
    </footer>
    <?= js([
        'assets/js/script.js',
        'assets/js/cursor.js',
        '@auto',
    ]) ?>
</body>

</html>