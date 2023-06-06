<div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch">
    <div class="card">
        <?php
        // Get the featured image URL at large size
        $featured_image_url = get_the_post_thumbnail_url( get_the_ID(), 'large' );
        // Set image url to featured image or default image
        $image_url = !empty($featured_image_url) ? $featured_image_url : get_template_directory_uri() . '/images/perro-default.png';
        ?>
        <div class="image-square" style="background-image: url(<?= $image_url ?>);"></div>

        <div class="card-body bg-light">
            <?php if ( get_field( 'nombre' ) ) : ?>
                <h5 class="card-title">
                    <?php the_field( 'nombre' ) ?>
                </h5>
            <?php endif ?>
    
            <?php if ( get_field( 'raza' ) ) : ?>
                <h6 class="card-text">
                    <?php the_field( 'raza' ) ?>
                </h6>
            <?php endif ?>
            
            <?php if ( get_field( 'edad' ) ) : ?>
                <h6 class="card-text">
                    <?php the_field( 'edad' ) ?>
                    <?= _n( 'año', 'años', get_field( 'edad' ), 'cactus' ); ?>
                </h6>
            <?php endif ?>
    
            <?php if ( get_field( 'personalidad' ) ) : ?>
                <p class="card-text">
                    <?php the_field( 'personalidad' ) ?>
                </p>
            <?php endif ?>
        </div>
    </div>
</div>