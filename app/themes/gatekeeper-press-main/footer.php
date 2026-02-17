<?php
/**
 * Footer Template
 *
 * Outputs the site footer and required WordPress hooks.
 *
 * @package Gatekeeper_Press
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<?php
$template = get_option('gkp_template_data');
$template_name = $template['style'];

// echo $template_name;
// die();

if ($template_name == 'simple'){
get_template_part('template-parts/footers/footer-simple');
}elseif ($template_name == 'minimal') {
get_template_part('template-parts/footers/footer-minimal');
}
?>

<?php wp_footer(); ?>
</body>
</html>
