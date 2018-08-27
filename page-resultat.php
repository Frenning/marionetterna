<?php
/**
* Tävlings Resultat
*/

get_header(); ?>
<div id="primary" class="content-area col-sm-12 col-md-9">
	<div class="content-inside col-md-12">
		<h1>Resultat</h1>
		<?php 
			read_page_content_from_url('https://dans.se/tools/comp/results/?org=marionetterna;year=2018');
			// $d = new DOMDocument;
			// $mock = new DOMDocument;
			// //filtrera ut år för eventuellt snabbare laddningstid.
			// $d->loadHTML(file_get_contents('https://dans.se/tools/comp/results/?org=marionetterna;year=2018'));
			// $body = $d->getElementsByTagName('body')->item(0);
			// foreach ($body->childNodes as $child){
			// 	$mock->appendChild($mock->importNode($child, true));
			// }
			// echo $mock->saveHTML();
		?>
	</div><!--content-inside-->
</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>


