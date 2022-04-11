<!-- Hämtar och skriver ut header här -->
<?php get_header(); ?> 

<main>
<section>
    <div class="container">
        <div class="row">
            <div id="primary" class="col-xs-12">
                <!-- Loppen tittar om det finns en post och isåfall hämtar ut den på sidan -->
                <?php while(have_posts()) {
                            the_post(); ?>

                        <!-- Hämtar ut innehållet av inlägget  -->
                        <p><?php the_content(); ?></p>

                <?php } ?> 
            </div>
        </div>
    </div>
</section>
</main>

 <!-- Hämtar och skriver ut footer här -->
<?php get_footer(); ?> 