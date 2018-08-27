<?php
/**
* Kursschema
*/

get_header(); ?>
<div id="primary" class="content-area col-sm-12 col-md-9">
	<div class="content-inside col-md-12">
		<h1>Kursschema</h1>
		<?php readfile("https://dans.se/tools/reg/?org=marionetterna;cat=0;format=htmlBody"); ?>
		<!-- <?php //echo file_get_contents("https://dans.se/tools/comp/registrations/?org=marionetterna");
		// $d = new DOMDocument;
		// $mock = new DOMDocument;
		// $d->loadHTML(file_get_contents('https://dans.se/tools/reg/?org=marionetterna;cat=0'));
		// $body = $d->getElementsByTagName('body')->item(0);
		// foreach ($body->childNodes as $child){
		// 	$mock->appendChild($mock->importNode($child, true));
		// }

		// echo $mock->saveHTML();
		?>	 -->
	</div><!--content-inside-->
</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>


