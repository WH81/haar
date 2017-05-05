<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Hemi, Cuda, Challenger, Charger, Super Bee, Dart, GTS, GTX, Mopar, Restoration, Parts, Twin Cities, Minneapolis, St. Paul, Elk River, Metal Fabrication, Painting, Autobody, Auto body,English Wheel, ford, chevy, motorcycles, rat rods, street rods, custom paint, shaker hood repair, plastic repair, amd, AMD, auto metal direct, auto metal direct authorized dealer, Ford, Chevy, Chevrolet, Camaro, Impala, Chevelle, Nova, Super Sport, SS, RS/SS, Shelby, Cobra, cobra, mustang, GT500, GT350.">
    <meta name="description" content="Hite Autobody & Restoration">
    <!-- IE Edge Meta Tag -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">    
    <!-- Optional IE8 Support -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Bootstrap, css, javascript, jquery CDN links in this page are located here: https://gist.github.com/planetoftheweb/884b9bff2f84d4134020 -->
    <link rel="stylesheet" href="css/new-stylesheet.css">
    
    <script>
    	//Variable to hold request
		var request;
		
		// Bind to the submit event of our form
		$("#contact-form").submit(function(event) {
			
			// Prevent default posting of form - put here to work in case of errors
			event.preventDefault();
			
			// Abort any pending request
			if (request) {
				request.abort();
				}
				
			// Setup some local variables
			var $form = $(this);	
		
			// Let's select and cache all the fields
			var $inputs = $form.find("input, select, button, textarea");
			
			// Serialize the data in the form
			var serializedData = $form.serialize();
			
			// Let's disable the inputs for the duration of the Ajax request.
			// Note: we disable elements AFTER the form data has been serialized.
			// Disabled form elements will not be serialized.
			$inputs.prop("disabled", true);
			
			// Fire off the request to /form.php
			$.ajax({
				url: "process_mail.php",
				type: "post",
				data: serializedData,
				success: function(result){
					// $("#message_placeholder").html(result);
					alert('Success!');
					}
				});
				
			}
    
    </script>
    <title>Hite Autobody and Restoration | Official Site</title>
</head>

<body>
<!-- Facebook page plugin JavaScript code -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div id="outerWrapper">

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapsemenu" aria-expanded="false">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div><!-- /.navbar-header -->

<div class="collapse navbar-collapse" id="collapsemenu">
<ul class="nav nav-justified"><!--navbar-nav-->
<li>
<a title="Welcome to Hite Autobody & Restoration" target="_self" href="index.php" class="hidden-xs"><?php echo strtoUpper('Home') ?></a>
<a title="Welcome to Hite Autobody & Restoration" target="_self" href="index.php" class="visible-xs" data-toggle="collapse" data-target=".navbar-collapse"><?php echo strtoUpper('Home') ?></a>
</li>
<li>
<a title="About Hite Autobody & Restoration" target="_self" href="index.php#about" class="hidden-xs"><?php echo strtoUpper('About') ?></a>
<a title="About Hite Autobody & Restoration" target="_self" href="index.php#about" class="visible-xs" data-toggle="collapse" data-target=".navbar-collapse"><?php echo strtoUpper('About') ?></a>
</li>
<li>
<a title="Services offered at Hite Autobody & Restoration" target="_self" href="index.php#services" class="hidden-xs"><?php echo strtoUpper('Services') ?></a>
<a title="Services offered at Hite Autobody & Restoration" target="_self" href="index.php#services" class="visible-xs" data-toggle="collapse" data-target=".navbar-collapse"><?php echo strtoUpper('Services') ?></a>
</li>
<li>
<a title="Hite Autobody & Restoration address" target="_self" href="index.php#location" class="hidden-xs"><?php echo strtoUpper('Location') ?></a>
<a title="Hite Autobody & Restoration address" target="_self" href="index.php#location" class="visible-xs" data-toggle="collapse" data-target=".navbar-collapse"><?php echo strtoUpper('Location') ?></a>
</li>
<li>
<a title="Hite Autobody & Restoration gallery" target="_self" href="gallery.php" class="hidden-xs"><?php echo strtoUpper('Gallery') ?></a>
<a title="Hite Autobody & Restoration gallery" target="_self" href="gallery.php" class="visible-xs" data-toggle="collapse" data-target=".navbar-collapse"><?php echo strtoUpper('Gallery') ?></a>
</li>
<li>
<a title="Contact Hite Autobody & Restoration" target="_self" href="contact.php" class="hidden-xs"><?php echo strtoUpper('Contact') ?></a>
<a title="Contact Hite Autobody & Restoration" target="_self" href="contact.php" class="visible-xs" data-toggle="collapse" data-target=".navbar-collapse"><?php echo strtoUpper('Contact') ?></a>
</li>
</ul><!-- /.nav .navbar-nav -->
</div><!-- /.collapse .navbar-collapse -->
</div><!-- /.container -->
</nav><!-- /.navbar -->




<!-- heading section -->
<header class="bgimage">
<div class="container-fluid">
<!-- Hite Autobody and Restoration main logo -->
<img class="logo img-responsive" src="images/logos/logo-silver-small.svg" alt="Hite Autobody and Restoration">
</div><!-- /.container-fluid header -->
</header>
