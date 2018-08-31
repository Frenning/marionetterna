<?php
/**
 * Separate homepage file
 * Only display on front page
 */
 ?>
<?php get_header(); ?>
<div id="primary" class="content-area col-sm-12 col-md-9">
  <div class="content-inside col-md-12">
      <h1 class="heading8">
      <?php echo wp_kses_post(get_bloginfo('description')); ?>
      </h1>
      <div class="post-area col-md-12">
        <?php 
          $post_id = 100;
          $queried_post = get_post($post_id);
          echo $queried_post->post_content;
        ?>
      </div>
      <?php echo do_shortcode("[custom-facebook-feed]"); ?>          
  </div><!--content-inside-->
</div><!-- #primary -->
<?php get_sidebar();?>
</div>
<?php get_footer(); ?>
