<?= snippet('header') ?>
    <section>
        <h1>MAGMA</h1>
        <p>The website is having a new restyling</p>
        <p>In the meanwhile stay updated on our social networks</p>
        <div>
            <a href="https://www.instagram.com/magma_it/" target="_blank">
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
            <a href="https://www.facebook.com/MAGMAitalia" target="_blank">
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
<?= snippet('footer') ?>