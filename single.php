<?php get_header(); ?>

<div class="container-post jumbotron">
	<div class="container-post-inner row">		
		<div class="container-post-navbar col-sm-3">
		
		<nav class="navbar sticky-top flex-column" role="navigation">						
			<!-- Collect the nav links, forms, and other content for toggling --> 		
			<ul class="nav nav-pills sticky-top flex-column">
				<?php 
					while (have_posts()):
						the_post();
						$html = get_the_content();
					endwhile; 
					$tags = array('h2','h3');
					$title_arr = getTitlesWithTags($html,$tags);
					?>	
			</ul>
		</nav>
		</div>
		<!--nav class="navbar col-sm-3 sticky-top" role="navigation">
			<ul class="nav nav-stacked nav-pills "-->
				<!--?php 
					while (have_posts()):
						the_post();
						$html = get_the_content();
					endwhile; 
					$tags = array('h2','h3');
					$title_arr = getTitlesWithTags($html,$tags);
					?-->	
					<!--a href="#GroupA">Group A</a>
					<ul class="nav nav-stacked" >
						<li><a href="#GroupASub1">Sub-Group 1</a></li>
						<li><a href="#GroupASub2">Sub-Group 2</a></li>
					</ul-->		
			<!--/ul>
		</nav-->
		<div class="col-sm-8">
		<?php while (have_posts()):the_post();?>
		<h2  class="single-post-title"><?php the_title();?></h2>

		<p class="blog-post-meta"><a href="#"><?php the_date(); ?></a> by <?php the_author();?></p>
		<hr/>
		<div class="container-post-content">
			<?php the_content();?>
		</div>
		<?php endwhile; ?>
		<hr/>
	</div> <!-- container-post -->
</div> <!-- container-post-inner -->

<div><?php comments_template(); ?></div>

<?php get_footer(); ?>