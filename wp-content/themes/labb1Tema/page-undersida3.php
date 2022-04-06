<?php get_header(); ?> 

<main>
<section>
    <div class="container">
        <div class="row">
            <div id="primary" class="col-xs-12">
                <?php while(have_posts()) {
                            the_post(); ?>

                                <p><?php the_content(); ?></p>

                <?php } ?> 
            </div>
        </div>
    </div>
</section>
</main>

<?php get_footer(); ?> 