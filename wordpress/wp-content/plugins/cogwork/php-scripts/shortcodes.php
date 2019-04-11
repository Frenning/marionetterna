<?php

/**
 * @param string[] $attributes
 * @param string $content
 * @param string $tag
 * @return string
 */
function cwAddShortcode($attributes, $content, $tag) {

	// Placing the require_once() here stops it from being loaded unless it's needed
	require_once(CW_PHP_CLASSES_DIR.'cwShortcode.php');

	$shortcode = new cwShortcode($attributes, $content, $tag);

	return $shortcode->getHtmlContent();
}
add_shortcode('cw'    , 'cwAddShortcode');
add_shortcode('cwShop', 'cwAddShortcode'); // For backward compability with old installations

?>