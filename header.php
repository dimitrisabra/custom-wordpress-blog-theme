<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">

            <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

  
            <div class="collapse navbar-collapse" id="mainNav">
                <?php 
wp_nav_menu([
    'theme_location' => 'primary',
    'container' => false,
    'menu_class' => 'navbar-nav ms-auto mb-2 mb-lg-0',
    'fallback_cb' => false,
    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    'link_before' => '<span class="me-3">', 
    'link_after' => '</span>',
]);
?>

            </div>
        </div>
    </nav>
</header>
