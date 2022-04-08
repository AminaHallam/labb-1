<?php 
get_header(); 
?> 

<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
                        <?php while(have_posts()) {
                        the_post(); ?>

							<p><?php the_content(); ?></p>

                        <?php } ?> 
						</div>
						<aside id="secondary" class="col-xs-12 col-md-3">
							<ul class="side-menu">
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

<?php get_footer(); ?> 