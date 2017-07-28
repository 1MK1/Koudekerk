<!DOCTYPE html>
<html>
<head>

 
 <title><?php bloginfo('name'); ?></title>
 <?php wp_head(); ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body <?php body_class(); ?>>

<header class="site-header col-md-3">
    <div class="siteheadername"><h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1></div>
 <nav class="site-nav">
    <?php wp_nav_menu(); ?>
 </nav>

 </header>
 <div class="container col-md-9">