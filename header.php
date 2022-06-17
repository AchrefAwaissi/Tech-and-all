
<?php require('img.php');?>
<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('Theme wordpress-Responsie Tech and All-download now and build your web site on wordpress');?>">
    <link href="<?php bloginfo('template_url');?>https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">   
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" />

    <title><?php bloginfo('name');?>
    <?php is_front_page() ? bloginfo('description'):wp_title();?>
</title>
<?php wp_head();?>
    </head>
   
    </style>
<body>
<header class="blog-header" style="background-image: url(<?php echo $bgheader;?>">
<nav class="navbar navbar-expand-md navbar-light bg-transparent" role="navigation" >
<?php get_theme_mod('header_background');?>

<div class="container-fluid">
<img src="<?php echo $logoheader ?>" alt="Logo du site" alt="Logo " class="img-fluid logo"/>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
        <span class="navbar-toggler-icon"></span>
    </button>
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
    </div>
</nav>
      <div class="container devicescontainer">
      <div class="row">
      <img src="<?php echo  $headerdevices ?>" alt="apple devices" class="img-fluid alldivces">
      </div>
    </div>
    <div class="down">
      <p class="scroltitle">DISCOVER MORE</p>
      <img src="<?php echo  $headerdiscover ?>" alt="vers le bas du site" class="imagescrol">

    </div>
</header>
