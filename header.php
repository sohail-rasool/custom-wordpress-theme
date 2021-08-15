<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <title><?php// wp_title(); ?></title> -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="header-area">
    <h1><a href="<?php bloginfo('url') ?>"><?php bloginfo('name') ?></a></h1>
    <h3><?php bloginfo('description') ?></h3>
</header>

<main id='main'>


    
