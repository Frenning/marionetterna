<?php
/**
 * Separate homepage file
 * Only display on front page
 */
 ?>
<?php get_header("homepage"); ?>
<div class="gridContainer">
  <div class="row header_description">
    <h1 class="heading8">
      <?php echo wp_kses_post(get_bloginfo('description')); ?>
    </h1>
  </div>
  <div class="row">
      <div class="col-xs-12 col-sm-6">
        <?php echo do_shortcode("[custom-facebook-feed]"); ?>
      </div>
      <div class="col-xs-12 col-sm-3">
          <?php get_sidebar();?> 
      </div>
  </div>
</div>
<?php get_footer(); ?>
