<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    
    <!-- Simple loader with opacity animation -->
    <div id="loader" style="display:none;position:fixed; top:0; left:0; right:0; bottom:0; background:black; z-index:99999; transition:opacity 1s ease-out"></div>
    <script>document.getElementById('loader').style.display = '';</script>

    <!-- Body open hook -->
    <?php wp_body_open(); ?>

    <div id="page" class="site">

        <!-- Header -->
        <?php get_template_part( 'template-parts/header', null, $args ); ?>
        
        <!-- Main content -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">