<?php
/**
* Kursschema
*/

get_header(); ?>
<div id="primary" class="content-area col-sm-12 col-md-9">
	<div class="content-inside col-md-12">
		<h1>Kursschema</h1>
		<?php 
		//readfile("https://dans.se/tools/reg/?lang=sv&org=marionetterna;cat=0;format=htmlBody"); 
		echo do_shortcode("[cw shop org=marionetterna]");
		?>
		<?php 
			//read_page_content_from_url('https://dans.se/tools/reg/?lang=sv&org=marionetterna;cat=0');
		?>	
	</div><!--content-inside-->
</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>


