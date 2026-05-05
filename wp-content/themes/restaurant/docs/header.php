<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="header">
        <img src="http://localhost/restaurant/wp-content/uploads/2026/05/wp_sushis_logo.jpg" width="180px" height="auto" alt="logo" class="logo-1">
        <div class="nav-menu">
             <?php wp_nav_menu([
            'theme_location' => 'main'
        ]) ?>
        </div>   
    </div>
    
<!-- FIN HEADER -->
