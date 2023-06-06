<?php
$header_args = [
    'title' => 'Perros',
    'description' => '¡Bienvenido/a a nuestra página de perros extraordinarios! Aquí encontrarás una amplia variedad de caninos con personalidades únicas y encantadoras'
];
get_header(null, $header_args);
?>

<div class="container">
    <div class="row">
        <?php 

        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                get_template_part('template-parts/content', 'perro');
            endwhile;
        else :
            get_template_part('template-parts/content', 'none');
        endif;

        ?>
    </div>
</div>

<?php get_footer(); ?>