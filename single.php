<?php get_header(); ?>

<div class="container-post jumbotron">
	<div class="container-post-inner row">		
		<div class="container-post-navbar col-md-3 hidden-sm-down">
		
		<nav class="navbar sticky-top flex-column" role="navigation">						
			<!-- Collect the nav links, forms, and other content for toggling --> 		
			<h5>Table of Content</h5>
			<ul class="nav nav-pills sticky-top flex-column">
				<?php 
					while (have_posts()):
						the_post();
						$html = get_the_content();
					endwhile; 
					$tags = array('h2','h3');
					getTitlesWithTags($html,$tags);
					?>	
			</ul>
		</nav>
		</div>
		
	<div class="container-post-content-outer col-md-9 col-sm-12 col-12">
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

<?php comments_template(); ?>

<?php get_footer(); ?>