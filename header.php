<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>GreenSlugg</title>
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
	<link rel="icon" type="img/jpg" href="http://matthewtravisblog.com/wp-content/uploads/2019/02/gs-muse-profile.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Lora|Oswald" rel="stylesheet">

	<?php wp_head();?>

</head>

<body <?php body_class();?>>

<!-- Header -->

  <div class="none">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top remove-nav-padding">
      <a class="navbar-brand edits-to-nav-heading" href="http://localhost/wordpress/">
        <img class="profile-image" src="http://matthewtravisblog.com/wp-content/uploads/2019/02/gs-muse-profile.png" alt="Profile-Small">
        <h3 class="logo"><span class="h3-large">G</span><span class="h3-small">REEN</span><span class="h3-large">S</span><span class="h3-small">LUGG</span></h3>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">

        <?php
		  	$defaults = array(
				'container' => 'ul',
				'theme_location' => 'top-menu',
				'menu_class' => 'navbar-nav ml-auto'
			);

		   wp_nav_menu( $defaults );
		?>

		  <!--<ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="https://matthewtravisblog.com">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://matthewtravisblog.com/about">ABOUT</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="https://matthewtravisblog.com/blog">BLOG</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://matthewtravisblog.com/media">MEDIA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://matthewtravisblog.com/contact">CONTACT</a>
          </li>
        </ul>-->
      </div>
    </nav>
  </div>
