<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Oscar Mwanandimai"/>
  <title>
    <?php
    global $page, $paged;

    wp_title('|', TRUE, 'right');

    if ($paged >= 2 || $page >= 2)
    echo ' | ' . sprintf(__('Page %s', 'amk'), max($paged, $page));
    ?>
  </title>
  <link rel="profile" href="http://gmpg.org/xfn/11"/>
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
  <link rel="shortcut icon" href="<?php echo IMAGES. 'favicon.ico'; ?>" type="image/x-icon">
  <link rel="icon" href="<?php echo IMAGES. 'favicon.ico'; ?>" type="image/x-icon">
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
