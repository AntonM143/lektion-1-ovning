<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    
    <meta name="generator" content="Hugo 0.82.0">
    <title>hello world</title>

    
    <script defer src="<?= get_template_directory_uri()?>/main.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?= get_template_directory_uri()?>/style.css" rel="stylesheet">
    <?php
    wp_head();?>
  </head>
  <body>
    
<div id="hem" class="container ">
  
  <?php
    wp_nav_menu( array( 
        'theme_location' => 'my-custom-menu', 
        'container_class' => 'custom-menu-class' ) ); 
    ?>
   
  
</div>