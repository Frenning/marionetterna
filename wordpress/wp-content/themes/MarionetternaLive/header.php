<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
  <div class="header" style="background-image:url('<?php esc_url(header_image());?>');">
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
  <div class="gridContainer">
    <div class="row header_title">
      <h1 class="heading98"><?php echo business_express_title(); ?></h1>
    </div>
  </div>
</div>