<?php
$args = wp_parse_args( $args, array(
    'title' => '',
    'description' => ''
) );

// Set title to $args['title'] (passed from header.php)
$page_title = $args['title'];
// If empty, set it to the page title
$page_title = empty($page_title) ? get_the_title() : $page_title;
// If the page title is empty, set it to "Home"
$page_title = empty($page_title) ? 'Home' : $page_title;

?>
<header>
    <div class="container">
        <div class="row">

            <h1><?= $page_title ?></h1>

            <p><?= $args['description'] ?></p>
            
        </div>
    </div>
</header>