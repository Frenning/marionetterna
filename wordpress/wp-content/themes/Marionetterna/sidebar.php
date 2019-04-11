<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package dazzling
 */
?>
<div id="secondary" class="widget-area col-sm-12 col-md-3 hidden-sm-down" role="complementary">
	<div class="col-md-12 hidden-sm-down">
		<?php do_action( 'before_sidebar' ); ?>
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
		<?php endif; // end sidebar widget area ?>
	</div><!-- widgets -->
</div><!-- #secondary -->
