<?php 
get_header(); 
?> 



        <main>
            <!-- Loppen tittar om det finns en post och isåfall hämtar ut den på sidan --> 
            <?php while(have_posts()) {
                the_post(); ?>
			    <section>

                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="hero">
                                    <!-- hämtar bilden -->
                                    <?php the_post_thumbnail(); ?> 
                                    
                                    <div class="text">

                                        <!-- hämtar innehållet -->
                                        <p><?php the_content(); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </section>
            <?php } ?> 

		</main>
        <?php get_footer(); ?>
