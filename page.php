<?php 

    get_header();

    while(have_posts()) {
    
    the_post(); ?>

    <h1><?php the_title(); ?></h1>
    
    <article><?php the_content(); ?></article>

    <?php }

    get_footer();

?>