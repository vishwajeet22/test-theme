<!DOCTYPE html>
<html <?php language_attributes(); ?>>
 
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
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
    <h3 class="w3-padding-64"><b>Company<br>Name</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="#showcase" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Showcase</a> 
    <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Services</a> 
    <a href="#designers" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Designers</a> 
    <a href="#packages" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Packages</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact</a>
  </div>
</nav>

<div id="content" class="w3-content" style="max-width: 1400px;">

<!-- Top menu on small screens -->
<header>
<div id="miniHeader" class="w3-container w3-top w3-hide-large w3-theme w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-theme w3-margin-right" onclick="w3_open()">☰</a>
  <span>Company Name</span>
</div>  

<div class="w3-hide-small w3-hide-medium">
	<div class="w3-container w3-center w3-padding-32">
    	<h1><b>MY BLOG</b></h1>
  		<p>Welcome to the blog of <span class="w3-tag">unknown</span></p>
    </div>
	<div class="w3-bar w3-theme w3-center">
      <a href="#" class="w3-button">Home</a>
      <a href="#" class="w3-button">Link 1</a>
      <a href="#" class="w3-button">Link 2</a>
      <a href="#" class="w3-button">Link 3</a>
    </div>
</div>
  
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>