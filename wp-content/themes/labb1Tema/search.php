<?php 
get_header(); 
?> 

    <div class="col-xs-12">
        <div class="hero">
            <?php

                the_post_thumbnail(); 
            ?> 

            <div class="text">
                <?php 
                    while(have_posts()) {

                        the_post(); 
                
                ?>

                        <h1>
                        <?php the_title(); ?>
                        </h1>

                        <p>
                        <?php the_content(); ?>

                        </p>


                    <?php } ?>


            </div>

        </div>


    </div>

<?php get_footer(); ?> 