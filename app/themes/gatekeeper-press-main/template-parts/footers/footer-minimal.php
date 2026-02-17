<footer class="site-footer">
    <div class="footer-inner">
        <?php $footer_logo = 'https://msn.gatekeeperdashboard.com/template-clean/wp-content/uploads/sites/4/2026/01/author-3-768x49-1.png';
        if ($footer_logo) : ?>
            <div class="footer-logo">
                <img
                    src="<?php echo esc_url($footer_logo); ?>"
                    alt="Footer Logo"
                    loading="lazy">
            </div>
        <?php endif; ?>

        <p class="footer-credit">
            Designed by
            <a href="https://gatekeeperpress.com/" target="_blank" rel="noopener noreferrer">
                Gatekeeper Press
            </a> This is Minimal Template.
        </p>

    </div>
</footer>