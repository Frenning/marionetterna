<?php
/**
 * Separate homepage file
 * Only display on front page
 */
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="header-homepage" style="background-image:url('<?php echo business_express_homepage_header(); ?>');">
  <div class="menu-top-bar">
    <div class="gridContainer">
      <div class="row border_bottom">
        <div class="logo_col">
          <?php echo business_express_logo(); ?>
        </div>
        <div class="main_menu_col">
          <?php 
            wp_nav_menu(array(
              'theme_location' => 'primary',
              'menu_id'        => 'drop_mainmenu',
              'menu_class' => 'fm2_drop_mainmenu',
              'container_id' => 'drop_mainmenu_container',
              'fallback_cb' => 'business_express_nomenu_cb'
            ));
          ?>
        </div>
      </div>
    </div>
  </div>