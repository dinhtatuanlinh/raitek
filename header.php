<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
    <title><?php 
        wp_title('|', true, 'right');
        bloginfo('name');
    ?></title>

    <meta name="title" content="" />
    <meta name="description" content="" />
    <meta property="og:locale" content="vi" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Trang chủ" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="Raitek" />
    <meta property="og:title" content="Raitek">
    <meta property="og:image" content="<?php echo DTTL_THEME_URL_IMG; ?>/logos/favicon.png" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo DTTL_THEME_URL_IMG; ?>/logos/favicon.png" />
    <?php wp_head(); ?>
    <?php $default_posts_per_page = get_option( 'posts_per_page' ); ?>
    <style>
      <?php
        if(is_user_logged_in()){
          echo "#top { top: 32px !important;} #video-banner {margin-top: 50px!important;} #m-menu {top:48px !important;}";
        }
      ?>
    </style>
</head>
<body>
<?php
wp_body_open();
?>
