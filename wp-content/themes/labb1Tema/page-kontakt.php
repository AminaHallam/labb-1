<!-- Hämtar och skriver ut header här -->
<?php get_header(); ?> 


<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-md-8 col-md-offset-2">
							<!-- Loppen tittar om det finns en post och isåfall hämtar ut den på sidan -->
							<?php while(have_posts()) {
								the_post(); 
								?> 
								<!-- Skriver ut titeln  -->
								<h1><?php the_title(); ?></h1>	

								<p>
									<!-- skriver ut innehållet  -->
									<?php the_content(); ?> 
								</p>

							<?php } ?> 

							
						</div>
					</div>
				</div>
			</section>
		</main>

		 <!-- Hämtar och skriver ut footer här -->
<?php get_footer(); ?> 