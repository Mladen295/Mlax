<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

	<?php wp_head();?>
  </head>

  <body>
<div class="blog-masthead">
    <ul class="nav">
      <li><a class="nav li" href="../">Home</a></li>
      <li>
      <?php wp_nav_menu( array( 'container_class' => 'main-nav', 'theme_location' => 'primary' ) );?>
      </li>
    </ul>
</div>


      
<div class="blog-header">
	<h1 class="blog-title"><a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
    <p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?>" </p>
</div>