<header class="simple-header">

	<!-- TOP AREA -->
	<div class="simple-header-top">

		<!-- LOGO -->
		<div class="simple-logo">
			<a href="<?php echo esc_url( home_url('/') ); ?>">
				<img 
					src="https://msn.gatekeeperdashboard.com/template-simple/wp-content/uploads/sites/2/2025/12/logo.png"
					alt="<?php bloginfo('name'); ?>"
				>
			</a>
		</div>

		<!-- SOCIAL ICONS -->
		<div class="simple-social">
			<a href="#" class="social-icon instagram" aria-label="Instagram"></a>
			<a href="#" class="social-icon twitter" aria-label="X"></a>
			<a href="#" class="social-icon facebook" aria-label="Facebook"></a>
			<a href="#" class="social-icon youtube" aria-label="YouTube"></a>
		</div>

	</div>

	<!-- MENU BAR -->
	<nav class="simple-navigation">
		<?php
		wp_nav_menu([
			'theme_location' => 'primary',
			'menu_class'     => 'simple-menu',
			'container'      => false,
		]);
		?>
	</nav>

</header>