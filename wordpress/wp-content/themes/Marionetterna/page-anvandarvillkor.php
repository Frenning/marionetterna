<?php
/**
* Användarvillkor
*/

get_header(); ?>
	<div id="primary" class="content-area col-sm-12 col-md-9">
		<div class="content-inside content-terms col-md-12">
			<h1> <?php the_title(); ?></h1>
			<?php while ( have_posts() ) : the_post(); ?>
				<p><?php echo (the_content());?></p>
			<?php endwhile; ?>
		</div><!--content-inside-->
	</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>