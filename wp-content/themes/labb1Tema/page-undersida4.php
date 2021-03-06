<!-- Hämtar och skriver ut header här -->
<?php get_header(); ?> 

<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-8 col-md-6">
                        <!-- Loppen tittar om det finns en post och isåfall hämtar ut den på sidan -->
                        <?php while(have_posts()) {
                            the_post(); ?>

                                <!-- Hämtar ut innehållet av inlägget  -->
                                <p><?php the_content(); ?></p>

                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-6">
                                <!-- Hämtar ut bilden som tillhör inlägget  -->
                                <?php the_post_thumbnail(); ?>
                            </div>
                        <?php } ?> 
                        </div>
				</div>
			</section>

</main>

         <!-- Hämtar och skriver ut footer här -->
<?php get_footer(); ?> 