<?php get_header(null, ['title' => 'Eventos Caninos']); ?>

<div class="container">
    <div class="row">
        <div class="main-column col-12 col-lg-8">

            <h2 class="title"><?php the_title(); ?></h2>
    
            <?php if ( get_field('fecha') ) : ?>
                <p><span class="dashicons dashicons-calendar-alt"></span> <?php the_field('fecha'); ?></p>
            <?php endif ?>
    
            <?php if ( get_field('ubicacion') ) : ?>
                <p><span class="dashicons dashicons-location-alt"></span> <?php the_field('ubicacion'); ?></p>
            <?php endif ?>
    
            <?php if ( has_post_thumbnail() ) : ?>
                <?php $thumbnail_url = get_the_post_thumbnail_url( null, 'full' ); ?>
                <p><img class="img-fluid" src="<?= esc_attr($thumbnail_url)?>"></p>
            <?php endif ?>
            
            <div>
                <?php the_content(); ?>
            </div>

        </div>
    </div>
</div>

<?php get_footer(); ?>