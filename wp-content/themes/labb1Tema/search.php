<!-- Hämtar och skriver ut header här -->
<?php get_header(); ?> 

<main>
    <section>
        <div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<h1>
                                <!-- Hämtar titeln för varje sida -syns i flicken längst upp-  -->
                                <?php wp_title(' '); ?>
                            </h1>
                            <!-- Loppen tittar om det finns en post och isåfall hämtar ut den på sidan -->
                            <?php while(have_posts()) {
                                the_post(); ?> 
                            
							<article>
								<?php 
                                    /* hämtar och printar ut bilden */
                                    the_post_thumbnail();
                                ?> 

								<h2 class="title">
                                    <!-- Hämtar permalänken och titeln  -->
									<a href="<?php the_permalink();?>">
                                    <?php the_title(); ?> 
                                    </a>

								</h2>

								<ul class="meta">
									<li>
										<i class="fa fa-calendar"></i> 
                                       <!-- Hämtar ut datumet när inlägget skrivits  -->
                                        <?php echo get_the_date('l F j, Y' ); ?> 
									</li>
									<li>
										<i class="fa fa-user"></i> 
                                        <!-- Hämtar författaren namn som länk till en enskild sida  -->
                                        <?php the_author_posts_link(); ?>
									</li>
									<li>
										<i class="fa fa-tag"></i> 
                                        <!-- Hämtar ut kategorier som inlägget tillhör i  -->
                                        <?php the_category(', '); ?> 
									</li>
								</ul>
								<p>
								<!-- Sammanfattar inlägget för att slippa visa hela innehållet i inlägget -->
                                    <?php the_excerpt(); ?> 
                                </p>
							</article>

                            <?php } ?>

                            <nav class="navigation pagination">
								<!-- Skapar pagination utifrån antal inlägg som finns på sidan  -->
							<?php the_posts_pagination( array( 'mid_size' => 2 ) ); ?>
							</nav>
                            
                        </div>
                    </div>
        </div>

            

    </section>
    
</main>   

    
 <!-- Hämtar och skriver ut footer här -->
<?php get_footer(); ?> 