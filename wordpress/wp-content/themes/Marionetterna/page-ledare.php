<?php
/**
 * Ledare
 */
 ?>
<?php get_header();?>
<div id="primary" class="content-area col-sm-12 col-md-9">
    <div class="content-inside col-md-12">
    <?php
        $counter = 1; //start counter
        $grids = 3; //Grids per row
        global $query_string; //Need this to make pagination work

        $param = array(
            'limit' => -1,
        );

        $ledare = pods('ledare', $param);

        while ( $ledare ->fetch() ) { 
            ?>
            <div class="img-leaders col-md-4 col-sm-6">
                <?php echo get_the_post_thumbnail($ledare->ID());?>
                <h5> <?php echo $ledare->display('title'); ?> </h5>	
                <p class="nummer"><?php echo $ledare->field('phonenumber'); ?></p>     
            </div>
            <?php
        }
    ?>
    </div>
</div>
<?php get_sidebar(); ?>
<?php get_footer();?>