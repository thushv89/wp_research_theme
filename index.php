
<?php get_header();?>	

	<div id="container-primary" class='row'>	
		<div id="container-sidebar" class="col-xl-3 col-lg-3 col-sm-3 col-xs-3">				
		<div id="sidebar">
				<img id="header-overflow" src="<?php echo get_template_directory_uri()."/images/header-overflow.png";?>" alt="header background">
				<img id="profile-pic" src="<?php echo get_template_directory_uri()."/images/profile-pic.png";?>" alt="Profile Picture">
				<br/>
				<div id='sidebar-content-text'>
					<div class='sidebar-content-div'>
					<p class="sidebar-title">Thushan Ganegedara</p>			
					</div>
					<div class='sidebar-content-div'>
					<p class="sidebar-title">What am I?</p>
					<p class="sidebar-text">Machine Learning & Robotics Extraordinaire</p>
					<p class="sidebar-text">PhD Student, University of Sydney</p>
					</div>
					<div class='sidebar-content-div'>
					<p class="sidebar-title">Excel In:</p>
					<p class="sidebar-text">Python, C++, Tensorflow/Theano/Caffe, CSS/HTML</p>
					</div>										
				</div>
		</div>
		</div>
	
		<div id="container-secondary" class="col-xl-9 col-lg-9 col-sm-9 col-xs-9">						
					
			<div id="container-content" class="row">						
				<div id="content">
					<?php get_search_form();?>
					
					<?php if ( have_posts() ) : 
						while ( have_posts() ) : 
							the_post(); ?>
							<div class="post-div"> 
								<div class="post-title"><h3><a href="<?php the_permalink() ?>"><?php the_title();?></a></h3></div>
								<div class="post-cat">Categories: <?php the_category(', ');?></div>
							</div>
						
					<?php endwhile; else: ?>
						<h2>Woops...</h2>					 
						<p>Sorry, no posts found.</p>					 
						<?php endif; ?>			
					<br/><br/> <!-- this is to get some space between the last post item and the shaddow -->
				</div>
			</div>
		</div>
	</div>	
	
</div> <!-- div id=container -->

	<!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="<?php echo get_template_directory_uri(). "/bootstrap/js/bootstrap.min.js"?>" crossorigin="anonymous"></script>
	
<?php wp_footer(); ?>
	
</body>
</html>