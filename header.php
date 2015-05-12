<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    <?php
    global $page, $paged;

    wp_title('|', true, 'right');
    bloginfo('name');

    $site_description = get_bloginfo('description', 'display');
    if ($site_description && (is_front_page()))
      echo " :: $site_description";

    if ($paged >= 2 || $page >= 2)
      echo ' | ' . sprintf(__('Page %s', 'amk'), max($paged, $page));
    ?>
  </title>
  <meta name="author" content=""/>
  <meta name="copyright" content=""/>
  <link rel="profile" href="http://gmpg.org/xfn/11"/>
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <!-- the nav -->

  <?php
  wp_nav_menu(array(
    'menu' => 'primary',
    'theme_location' => 'main',
    'depth' => 2,
    'container' => 'div',
    'container_class' => 'collapse navbar-collapse',
                    //'container_id'      => 'bs-example-navbar-collapse-1',
    'menu_class' => 'nav navbar-nav',
    'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
    'walker' => new wp_bootstrap_navwalker())
  );
  ?>
