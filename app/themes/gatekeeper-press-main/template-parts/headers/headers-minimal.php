<header class="minimal-header">

	<div class="minimal-header-top">

		<div class="minimal-logo">
			<a href="<?php echo esc_url( home_url('/') ); ?>">
				<img src="https://msn.gatekeeperdashboard.com/template-minimal/wp-content/uploads/sites/3/2026/01/image-1.png" alt="Out of Luck">
			</a>
		</div>

		<nav class="minimal-navigation">
			<?php
			wp_nav_menu([
				'theme_location' => 'primary',
				'menu_class'     => 'minimal-menu',
				'container'      => false,
			]);
			?>
		</nav>

	</div>

	<div class="minimal-social-bar">
		<a href="#" class="social-circle instagram"></a>
		<a href="#" class="social-circle twitter"></a>
		<a href="#" class="social-circle facebook"></a>
		<a href="#" class="social-circle youtube"></a>
	</div>

</header>