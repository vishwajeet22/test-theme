<!DOCTYPE html>
<html <?php language_attributes(); ?>>
 
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo( 'name' ); ?></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
  <?php wp_head() ?>
</head>
 
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-theme w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;display: none" id="mySidebar"><br>

  <div class="w3-container">
    <h3 class="w3-padding-64"><b><?php bloginfo( 'name' ); ?></b></h3>
  </div>
  <div class="w3-bar-block">

    <?php wp_nav_menu( array( 'theme_location' => 'primary-menu',
        'menu_class' => 'w3-ul',
        //'container_class' => 'w3-bar-block w3-theme',
        'link_before' => '<div class="w3-bar w3-button">',
        'link_after' => '</div>'
    ) ); ?>
  </div>
</nav>

<div id="content" class="w3-content" style="max-width: 1400px;">

<!-- Top menu on small screens -->
<header>
<div id="miniHeader" class="w3-bar w3-mobile w3-top w3-hide-large w3-hide-medium w3-theme w3-xlarge">
  <h3><a href="javascript:void(0)" class="w3-button w3-theme w3-margin-right" onclick="w3_open()">☰</a>
  <span><?php bloginfo( 'name' ); ?></span></h3>
</div>  

<div id="paddingToAvoidHeaderOverlap" class="w3-container w3-hide-large w3-hide-medium w3-padding-32"></div>

<div class="w3-hide-small">
  <div class="w3-container w3-center w3-padding-32">
    <h1><b><?php bloginfo( 'name' ); ?></b></h1>
    <p><?php echo html_entity_decode(get_bloginfo( 'description' )); ?></p>
  </div>

  <?php wp_nav_menu( array( 'theme_location' => 'primary-menu',
      'menu_class' => 'pmenu',
      'container_class' => 'w3-bar w3-theme',
      'link_before' => '<div class="w3-button w3-padding-large">',
      'link_after' => '</div>'
  ) ); ?>

</div>
  
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>