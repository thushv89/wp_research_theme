
<?php get_header();?>	

		<div id="container-sidebar-small-inner" class="row hidden-md-up">
			<!--img id="header-overflow" src="<?php echo get_template_directory_uri()."/images/header-overflow.png";?>" alt="header background"-->
			<div id="sidebar-pic-div" class="col-3 col-sm-3">
				<img id="profile-pic" src="<?php echo get_template_directory_uri()."/images/profile-pic.png";?>" alt="Profile Picture">
			</div>
			<div id='sidebar-content-text' class="col-9 col-sm-9">
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
	
	
	<div id="container-primary" class='row'>	
		<div id="container-sidebar-outer" class="hidden-sm-down col-md-3 col-lg-3 col-xl-3">				
		<div id="container-sidebar-inner">
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
	
		<div id="container-secondary" class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-9">		
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
						
					<?php endwhile;?> 
					
					<?php else: ?>
						<h2>Woops...</h2>					 
						<p>Sorry, no posts found.</p>					 
						<?php endif; ?>			
					<br/> <!-- this is to get some space between the last post item and the shaddow -->
				</div>
			</div>
			
			<!-- Navigation logic uses bootstrap pagination !-->
			<?php if ( have_posts() ) : ?>
				<nav aria-label="Page navigation">				
				  <ul class="pagination justify-content-center">
					<?php $next_link = get_next_posts_link('Previous');
					$previous_link = get_previous_posts_link('Next');					
					if($next_link == ''):
					?>						
					<!-- If the next link is not available-->
						<li class="page-item disabled"><span class="page-link"><a href="#" tabindex="-1">Previous</a></span></li>
					<?php else: ?>
					<!-- If the next link is available-->
						<li class="page-item"><span class="page-link"><?php next_posts_link('Previous')?></span></li>
					<?php endif;?>
					<?php if($previous_link == ''):?>						
						<li class="page-item disabled"><span class="page-link"><a href="#" tabindex="-1">Next</a></span></li>
					<?php else: ?>
						<li class="page-item"><span class="page-link"><?php previous_posts_link('Next')?></span></li>
					<?php endif;?>
				  </ul>
				</nav>
			<?php endif;?>
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