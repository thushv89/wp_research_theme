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

<link rel="stylesheet" href="<?php get_template_directory_uri() . "/bootstrap/css/bootstrap.min.css"; ?>" crossorigin="anonymous">
<!-- Google web fonts -->
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Vollkorn">
<!-- Font awesome Icons -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<?php wp_head(); ?>
</head>
  
<body>
 
<div id="header">
	<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
	  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <a class="navbar-brand" href="#">Navbar</a>
	  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		<div class="navbar-nav">
		  <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
		  <a class="nav-item nav-link" href="#">Features</a>
		  <a class="nav-item nav-link" href="#">Pricing</a>
		  <a class="nav-item nav-link disabled" href="#">Disabled</a>
		</div>
	  </div>
	</nav>
</div>