<?php
/**
* Kontakt
*/

get_header(); ?>
<div id="primary" class="content-area col-sm-12 col-md-9">
	<div class="content-inside col-md-12">
	<h1> <?php the_title(); ?></h1>
	<div class="row">
		<div class="col-sm-6">
		<p class="kontakt-info"><?php 
			$kontakt = pods('kontakt', $id="adress"); 
			echo $kontakt->display('content');?>
		</p>
		</div>
		<div class="col-sm-6">
		<p class="kontakt-info"><?php 
			$kontakt = pods('kontakt', $id="mail");
			echo $kontakt->display('content');?>
		</p>
		</div>
	</div> <!--row-->		
		<a href="<?php echo $kontakt->field('link'); ?>">Större karta</a>
		<div class="maps-image">
			<a href="<?php echo $kontakt->field('link'); ?>"><?php echo get_the_post_thumbnail($kontakt->ID()); ?></a>
		</div>
	</div><!--content-inside-->
</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>


