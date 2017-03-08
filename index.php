
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
<?php wp_head(); ?>
</head>
  
<body>

<div id="container" class='container-fluid'>

<div id='header' class="row">
	<p> I'm the header </p>
</div>
		
<div id="container-primary" class='row'>	
	<div id="sidebar" class="col-xl-3 col-lg-3 col-sm-3 col-xs-3">				
			<img class='img-thumbnail' id="profile-pic" src="<?php echo get_template_directory_uri()."/images/profile-pic.jpg";?>" alt="Profile Picture">
			<p class="sidebar-title">Thushan Ganegedara</p>			
			<p class="sidebar-title">What am I?</p>
			<p class="sidebar-text">Machine Learning & Robotics Extraordinaire</p>
			<p class="sidebar-text">PhD Student, University of Sydney</p>
			<p class="sidebar-title">Excel In:</p>
			<p class="sidebar-text">Python, C++, Tensorflow/Theano/Caffe, CSS/HTML</p>
	</div>

	<div id="content" class="col-xl-9 col-lg-9 col-sm-12 col-xs-12">		
			<?php get_search_form();?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				 
				<h3><a class="post-title" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
			 
			<?php endwhile; else: ?>
				<h2>Woops...</h2>
			 
				<p>Sorry, no posts we're found.</p>
			 
				<?php endif; ?>
			
		</div>
	</div>
</div>
<!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="<?php get_template_directory_uri(). "bootstrap/js/bootstrap.min.js"?> crossorigin="anonymous"></script>
</body>

</html>