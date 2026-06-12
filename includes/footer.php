<footer class="site-footer">
    <div class="footer-grid">
        <div>
            <img class="footer-logo" src="<?= htmlspecialchars(url_path('/assets/images/nextgen-logo.png')) ?>" alt="NextGen Makers logo">
            <p>NextGen Makers Robotics Academy offers robotics, coding and STEM programs for children and teenagers aged 4 to 18.</p>
        </div>
        <div>
            <h2>Explore</h2>
            <a href="<?= htmlspecialchars(url_path('/programs.php')) ?>">Programs</a>
            <a href="<?= htmlspecialchars(url_path('/trial-class.php')) ?>">Trial Class</a>
            <a href="<?= htmlspecialchars(url_path('/locations.php')) ?>">Locations</a>
            <a href="<?= htmlspecialchars(url_path('/faq.php')) ?>">FAQ</a>
        </div>
        <div>
            <h2>Contact</h2>
            <p>WhatsApp: <?= htmlspecialchars($whatsappDisplay) ?></p>
            <p>Email: <?= htmlspecialchars($email) ?></p>
            <a class="btn btn-primary" href="<?= htmlspecialchars(whatsapp_url()) ?>" target="_blank" rel="noopener">Book Trial Class</a>
        </div>
    </div>
    <p class="copyright">&copy; <?= date('Y') ?> NextGen Makers. Learn. Build. Code. Create.</p>
</footer>

<a class="sticky-whatsapp" href="<?= htmlspecialchars(whatsapp_url()) ?>" target="_blank" rel="noopener" aria-label="Book trial class on WhatsApp">
    WhatsApp
</a>

<script src="<?= htmlspecialchars(url_path('/assets/js/main.js?v=' . ($assetVersion ?? time()))) ?>"></script>
</body>
</html>
