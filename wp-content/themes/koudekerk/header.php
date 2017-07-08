<!DOCTYPE html>
<html>
<head>

 
 <title><?php bloginfo('name'); ?></title>
 <?php wp_head(); ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body <?php body_class(); ?>>

<div class="container">
<header class="site-header">
    <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
 <nav class="site-nav">
    <?php wp_nav_menu(); ?>
 </nav>

 </header>