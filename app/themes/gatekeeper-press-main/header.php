<?php
/**
 * Header Template
 *
 * Outputs the document head and site header including branding
 * and primary navigation.
 *
 * @package Gatekeeper_Press
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<?php
$template = get_option('gkp_template_data');
$template_name = $template['style'];
if ($template_name == 'simple'){
get_template_part('template-parts/headers/headers-simple');
}elseif ($template_name == 'minimal') {
get_template_part('template-parts/headers/headers-minimal');
}
?>
