<?php
/**
 * Ledare
 */
 ?>
<?php get_header();?>
<div id="primary" class="content-area col-sm-12 col-md-9">
    <div class="content-inside col-md-12">
    <?php
        $param = array (
            'limit' => -1,
        );

        $param = array(
            'limit' => -1,
        );

        $ledare = pods('ledare', $param);

        while ( $ledare ->fetch() ) { 
            ?>
            <div class="img-leaders col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <?php 
                    if(get_the_post_thumbnail($ledare->ID())  != null)
                        echo get_the_post_thumbnail($ledare->ID());
                    else{
                        ?>
                        <img src="<?php echo get_template_directory_uri().'/assets/images/bild_saknas.png';  ?>" />
                        <?php
                    }
                    
                ?>
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