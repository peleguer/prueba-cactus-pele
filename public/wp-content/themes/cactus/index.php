<?php get_header(null, ['title' => 'Prueba Cactus Pele']); ?>

<?php 

if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        if ( is_front_page() || is_home() ) : 
            get_template_part('template-parts/content', 'home');
        else :
            get_template_part('template-parts/content', get_post_type());
        endif;
    endwhile;
else :
    get_template_part('template-parts/content', 'none');
endif;

?>

<?php get_footer(); ?>
