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

        /*Setting up our custom query (In here we are setting it to show 3 posts per page and eliminate all sticky posts) */
        $query1 = new WP_Query( array('posts_per_page'=>3, 'category_name'=>'Mobile') );

        if( $query1->have_posts()) :  while( $query1->have_posts()) : $query1->the_post(); 

            if( $counter == $grids ) : 
                $counter = 0; // Reset counter ?>
                <div class="col-cat3-last">
            <?php else: ?>
                <div class="col-cat3">
            <?php endif; ?>

                <div class="entry-featured"><?php x_featured_image(); ?></div>
                <div class="col-cat-pic"><?php echo get_avatar( get_the_author_meta('ID'), 40); ?></div>
                    <div class="hero-info">
                        <h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                        <p class="p-meta"><?php the_author_posts_link(); ?>  /  <?php the_time('m.d.y'); ?></p>
                    </div>
                </div>
        <?php
        $counter++;
        endwhile;
        //Pagination can go here if you want it.
        endif;
        wp_reset_postdata(); // Reset post_data after each loop
    ?>
        <!-- <div class="img-leaders col-md-4 col-sm-6">           
            <img class="img-leaders" src="<?php echo get_template_directory_uri(); ?>/assets/images/bild_saknas.png">
            <h5>Anna Johansson</h5>	
            <p class="nummer">076-708 41 65</p>     
        </div>
        <div class="img-leaders col-md-4 col-sm-6">            
            <img class="img-leaders" src="<?php echo get_template_directory_uri(); ?>/assets/images/bild_saknas.png">
            <h5>David Borg</h5>	
            <p class="nummer">070-491 06 07</p>  
        </div>
        <div class="img-leaders col-md-4 col-sm-6">            
            <img class="img-leaders" src="<?php echo get_template_directory_uri(); ?>/assets/images/ledare-emma.jpg">
            <h5>Emma Corlin</h5>	
            <p class="nummer">070-000 00 00</p>
        </div>
        <div class="img-leaders col-md-4 col-sm-6">
            <img class="img-leaders" src="<?php echo get_template_directory_uri(); ?>/assets/images/ledare-fannie.jpg">
            <h5>Fannie</h5>
            <p class="nummer">070-000 00 00</p> 
        </div>
        <div class="img-leaders col-md-4 col-sm-6">
            <img class="img-leaders" src="<?php echo get_template_directory_uri(); ?>/assets/images/ledare-fredrik.jpg">
            <h5>Fredrik Frenning</h5>
            <p class="nummer">076-788 18 58</p>  
        </div>
        <div class="img-leaders col-md-4 col-sm-6">
            <img class="img-leaders" src="<?php echo get_template_directory_uri(); ?>/assets/images/ledare-josefin.jpg"> 
            <h5>Josefine Persson</h5>
            <p class="nummer">076-843 60 67</p>
        </div>
        <div class="img-leaders col-md-4 col-sm-6">
            <img class="img-leaders" src="<?php echo get_template_directory_uri(); ?>/assets/images/ledare-julia.jpg"> 
            <h5>Julia Hemmingsson</h5>
            <p class="nummer">073-574 60 32</p> 
        </div>
        <div class="img-leaders col-md-4 col-sm-6">
            <img class="img-leaders" src="<?php echo get_template_directory_uri(); ?>/assets/images/ledare-madde.jpg"> 
            <h5>Madelene Svanbäck</h5>
            <p class="nummer">076-052 89 99</p>
        </div>
        <div class="img-leaders col-md-4 col-sm-6">
            <img class="img-leaders" src="<?php echo get_template_directory_uri(); ?>/assets/images/ledare-maria.jpg">
            <h5>Maria Eriksson</h5>
            <p class="nummer">073-354 65 53</p>  
        </div>
        <div class="img-leaders col-md-4 col-sm-6">
            <img class="img-leaders" src="<?php echo get_template_directory_uri(); ?>/assets/images/ledare-martina.jpg">
            <h5>Martina Svanbäck</h5>	
            <p class="nummer">070-227 38 43</p> 
        </div>
        <div class="img-leaders col-md-4 col-sm-6">
            <img class="img-leaders" src="<?php echo get_template_directory_uri(); ?>/assets/images/bild_saknas.png">
            <h5>Per Flink</h5>
            <p class="nummer">070-849 12 32</p>
        </div>
        <div class="img-leaders col-md-4 col-sm-6">
            <img class="img-leaders" src="<?php echo get_template_directory_uri(); ?>/assets/images/ledare-sandra.jpg">
            <h5>Sandra Flink</h5>	
            <p class="nummer">070-897 92 09</p>
        </div>
        <div class="img-leaders col-md-4 col-sm-6">
            <img class="img-leaders" src="<?php echo get_template_directory_uri(); ?>/assets/images/ledare-tobias.jpg">
            <h5>Tobias Claesson</h5>
            <p class="nummer">076-873 28 93</p>  
        </div>
        <div class="img-leaders col-md-4 col-sm-6">
            <img class="img-leaders" src="<?php echo get_template_directory_uri(); ?>/assets/images/bild_saknas.png">
            <h5>Wilma Henriksen</h5>	
            <p class="nummer">076-886 14 24</p> 
        </div>
        <div class="img-leaders col-md-4 col-sm-6">
            <img class="img-leaders" src="<?php echo get_template_directory_uri(); ?>/assets/images/ledare-okänd.jpg">
            <h5>Okänd Ledare</h5>	
            <p class="nummer">070-000 00 00</p> 
        </div> -->
    </div><!--content-inside-->
</div><!-- #primary -->   
<?php get_sidebar(); ?>
<?php get_footer();?>