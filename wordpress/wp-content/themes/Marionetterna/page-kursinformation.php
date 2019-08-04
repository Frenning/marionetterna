<?php
/**
* Kursinformation
*/
?>
<?php $ki_posts = get_field("ki-posts", get_the_id());?>
<?php get_header(); ?>
<div id="primary" class="content-area col-sm-12 col-md-9">
	<div class="content-inside col-md-12">
		<h1> <?php the_title(); ?></h1>
		<!-- <div class="post-area col-md-12">
        <?php foreach($ki_posts as $post){ ?>
          <div class="ki-posts">
            <?php echo $post->post_content; ?>
          </div>
          <?php
        }      
      ?>
	  </div> post-area -->
    <?php while ( have_posts() ) : the_post(); ?>
				<p><?php echo strip_tags(the_content());?></p>
    <?php endwhile; ?>
	</div><!--content-inside-->
</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>


