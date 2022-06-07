<?php 

    get_header();

    while(have_posts()) {
    
    the_post(); ?>

    <h2 class="text-2xl font-extralight text-slate-500 py-4 mt-6"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    
    <p><?php the_content(); ?></p>

    <hr>

    <?php }

    get_footer();

?>