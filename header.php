<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Vote Ben 2017">
    <meta name="author" content="Glen Knight">
    <link rel="icon" type="image/jpeg" href="<?php bloginfo('template_directory'); ?>/favicon.jpg" />
    <link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php wp_head(); ?>
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <a class="navbar-brand" href="#"><img class="custom_logo" src="<?php echo THEME_IMG_PATH; ?>/logo_small.jpg" /></a>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li ontouchstart="this.classList.toggle('hover');"><a href="<?php bloginfo( 'url' );?>">Main</a></li>
            <li ontouchstart="this.classList.toggle('hover');"><a href="<?php bloginfo( 'url' );?>/bio">Bio</a></li>
            <li ontouchstart="this.classList.toggle('hover');"><a href="<?php bloginfo( 'url' );?>/platform">Our Platform</a></li>
            <li ontouchstart="this.classList.toggle('hover');"><a href="<?php bloginfo( 'url' );?>/blog">Ben's Blog</a></li>
            <li ontouchstart="this.classList.toggle('hover');"><a href="<?php bloginfo( 'url' );?>/Events">Events</a></li>
            <li ontouchstart="this.classList.toggle('hover');" class="donate-button"><a class="donate-text" href="https://secure.actblue.com/entity/fundraisers/48657">Donate</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div><!--/.container-fluid -->
    </nav>
    <div id="wrap">
      <div id="main">
        <div class="jumbotron">
          <div>
            <!--<h1 class="header"><a class="titleHeader" href="<?php bloginfo( 'url' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>-->
            <!--<p class="titleDescription"><?php echo get_bloginfo( 'description' ); ?></p>-->
          </div>
        </div>
      <div class="container">
