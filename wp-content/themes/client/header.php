<!DOCTYPE html>
<html lang="<?= __hepl('fr') ?>" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo wp_title('·', false, 'right') . get_bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="language" content="<?php bloginfo('language'); ?>">
    <meta property="og:title" content="<?php echo wp_title('·', false, 'right') . get_bloginfo('name'); ?>">
    <meta property="og:description" content="<?php bloginfo('description'); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo esc_url(home_url()); ?>">
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/screenshot.png">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?= dw_asset('css'); ?>">
    <script src="<?= dw_asset('js'); ?>" defer></script>
</head>

<body itemscope="" itemtype="https://schema.org/Organization">
<header role="banner">
    <h1 class="sro">Le Vieux Moulin</h1>
    <div class="header__container">
    <nav class="nav_menu" aria-label="navigation principale">
        <h2 class="sro">Navigation principale</h2>
        <a class="nav__logo" href="<?= home_url() ?>" title="<?= __hepl('Se diriger vers la page d’accueil') ?>">
            <img class="logo" src="/wp-content/themes/client/resources/img/logo.png" alt="" height="60" width="50">
        </a>

        <div id="menuToggle">
            <label class="sro" for="menuCheckbox">Toggle mobile menu</label>
            <input type="checkbox" id="menuCheckbox">
            <span></span>
            <span></span>
            <span></span>
            <div role="navigation" class="sidenav">
                <?php wp_nav_menu([
                    'container' => false
                ]); ?>
            </div>
        </div>
        <div role="navigation" class="menu-desktop">
            <?php wp_nav_menu([
                'container' => false
            ]); ?>
        </div>
    </nav>
    </div>
</header>
<main>

