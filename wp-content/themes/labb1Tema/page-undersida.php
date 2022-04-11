<!-- Hämtar och skriver ut header här -->
<?php get_header(); ?> 

<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<!-- Loppen tittar om det finns en post och isåfall hämtar ut den på sidan -->
                        <?php while(have_posts()) {
                        the_post(); ?>

							<!-- Hämtar ut innehållet av inlägget  -->
							<p><?php the_content(); ?></p>

                        <?php } ?> 
						</div>
						<aside id="secondary" class="col-xs-12 col-md-3">
							<ul class="side-menu">
								<!-- Hämtar och skriver ut lämplig meny  -->
							<?php wp_nav_menu(array(
                            'theme_location' => 
                            'sidomeny'
                            ));
                            ?>
							</ul>
						</aside>
					</div>
				</div>
			</section>
		</main>

		 <!-- Hämtar och skriver ut footer här -->
<?php get_footer(); ?> 