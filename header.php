<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen,projection" />

<!-- Required meta tags -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<?php wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . "/bootstrap/css/bootstrap.min.css");?>

<!--link rel="stylesheet" href="<?php get_template_directory_uri() . "/bootstrap/css/bootstrap.min.css"; ?>" crossorigin="anonymous"-->
<!-- Google web fonts -->
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Vollkorn">

<!-- Font awesome Icons -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<!--Prints head info on the front end -->
<?php wp_head(); ?> 
</head>

<body>
	
	<div id="container" class='container-fluid'>	
		<div id="container-header" class="row">
			<nav class="navbar navbar-toggleable-sm navbar-inverse"> 
				<!-- For mobile devices toggle button appears showing menu items --> 
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<a class="navbar-brand" href="#"><span id="brand-icon"><img src="<?php echo get_template_directory_uri()?>/images/logo.png" width="35px" height="35px" alt=""></span></a> 
				
				<!-- Collect the nav links, forms, and other content for toggling --> 
				<div class="collapse navbar-collapse" id="navbarSupportedContent"> 
					<?php /* Primary navigation */
					wp_nav_menu( array(
					  'menu' => 'primary',
					  'theme_location' => 'primary',
					  'depth' => 2,
					  'container' => false,
					  'menu_class' => 'nav navbar-nav',
					  //Process nav menu using our custom nav walker
					  'walker' => new wp_bootstrap_navwalker())
					);
				?>
				</div>
			</nav>
		</div>

