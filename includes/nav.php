<header class="site-header">
    <a class="brand" href="<?= htmlspecialchars(url_path('/index.php')) ?>" aria-label="NextGen Makers home">
        <img src="<?= htmlspecialchars(url_path('/assets/images/nextgen-logo.png')) ?>" alt="NextGen Makers logo">
    </a>

    <button class="nav-toggle" type="button" aria-label="Open menu" aria-expanded="false" data-nav-toggle>
        <span></span>
        <span></span>
        <span></span>
    </button>

    <nav class="main-nav" data-main-nav>
        <a href="<?= htmlspecialchars(url_path('/about.php')) ?>">About</a>
        <div class="nav-dropdown" data-nav-dropdown>
            <button class="nav-dropdown-toggle" type="button" aria-expanded="false" data-nav-dropdown-toggle>
                Programs
            </button>
            <div class="nav-dropdown-menu">
                <a href="<?= htmlspecialchars(url_path('/programs.php')) ?>">All Programs</a>
                <a href="<?= htmlspecialchars(url_path('/programs/little-maker.php')) ?>">Little Maker</a>
                <a href="<?= htmlspecialchars(url_path('/programs/junior-maker.php')) ?>">Junior Maker</a>
                <a href="<?= htmlspecialchars(url_path('/programs/young-coder.php')) ?>">Young Coder</a>
                <a href="<?= htmlspecialchars(url_path('/programs/young-innovator.php')) ?>">Young Innovator</a>
                <a href="<?= htmlspecialchars(url_path('/programs/senior-innovator.php')) ?>">Senior Innovator</a>
                <a href="<?= htmlspecialchars(url_path('/programs/senior-coder.php')) ?>">Senior Coder</a>
                <a href="<?= htmlspecialchars(url_path('/programs/nextgen-genius.php')) ?>">NextGen Genius</a>
            </div>
        </div>
        <a href="<?= htmlspecialchars(url_path('/trial-class.php')) ?>">Trial Class</a>
        <div class="nav-dropdown" data-nav-dropdown>
            <button class="nav-dropdown-toggle" type="button" aria-expanded="false" data-nav-dropdown-toggle>
                Locations
            </button>
            <div class="nav-dropdown-menu">
                <a href="<?= htmlspecialchars(url_path('/locations.php')) ?>">All Locations</a>
                <a href="<?= htmlspecialchars(url_path('/branches/mtdc-shah-alam.php')) ?>">MTDC Shah Alam</a>
                <a href="<?= htmlspecialchars(url_path('/branches/bandar-puteri-bangi.php')) ?>">Bandar Puteri Bangi</a>
                <a href="<?= htmlspecialchars(url_path('/branches/puncak-alam.php')) ?>">Puncak Alam</a>
                <a href="<?= htmlspecialchars(url_path('/branches/seksyen-7-shah-alam.php')) ?>">Seksyen 7 Shah Alam</a>
                <a href="<?= htmlspecialchars(url_path('/branches/seksyen-13-shah-alam.php')) ?>">Seksyen 13 Shah Alam</a>
                <a href="<?= htmlspecialchars(url_path('/branches/cyberjaya.php')) ?>">Cyberjaya</a>
                <a href="<?= htmlspecialchars(url_path('/branches/bandar-baru-selayang.php')) ?>">Bandar Baru Selayang</a>
            </div>
        </div>
        <a href="<?= htmlspecialchars(url_path('/nextgen-spark.php')) ?>">NextGen Spark</a>
        <a href="<?= htmlspecialchars(url_path('/collaboration.php')) ?>">Collaboration</a>
        <a href="<?= htmlspecialchars(url_path('/faq.php')) ?>">FAQ</a>
        <a href="<?= htmlspecialchars(url_path('/contact.php')) ?>">Contact</a>
    </nav>

    <a class="header-cta" href="<?= htmlspecialchars(whatsapp_url()) ?>" target="_blank" rel="noopener">Book Trial</a>
</header>
