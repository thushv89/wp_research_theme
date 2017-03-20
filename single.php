<?php get_header(); ?>

<div class="container-post jumbotron">
	<div class="container-post-inner row">		
		<div class="container-post-navbar col-md-3 hidden-sm-down">		
		<nav class="navbar sticky-top flex-column" role="navigation">	
			<?php social_share_buttons();?>
			<!-- Collect the nav links, forms, and other content for toggling --> 
			<div class="card">
			<h5 class="card-header">Table of Content</h5>
			<div class="nav-item-group card-block">
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
			</div>
			</div>
		</nav>
		</div>
	
	
		<div class="container-post-content-outer col-md-9 col-sm-12 col-12">
			<div class="container-post-content-inner">
				<?php while (have_posts()):the_post();?>
				<div class="container-post-title">
					<h2  class="single-post-title"><?php the_title();?></h2>
					<p class="blog-post-meta"><a href="#"><?php the_date(); ?></a> by <?php the_author();?></p>
				</div>
				<hr/>				
				<div class="container-post-content">
					<?php the_content();?>
				</div>
				<div class="container-tags">
					<?php the_tags();?>
				</div>
				<?php endwhile; ?>
				<hr/>
			</div> <!-- container-post -->
			<div class="related-posts-outer">
				<div class="related-posts-title">
					<h2> You might also like </h2>
				</div>
			<br/>
			<?php 
				$orig_post = $post;
				global $post;
				$tags = get_the_tags($post); //return wp_term array
									
				if ($tags) {
					$tag_ids = array();
					$tag_names = array();
					foreach($tags as $individual_tag){
						$tag_ids[] = $individual_tag->term_id;
						$tag_names[] = $individual_tag->name;
						}										
					
					$args=array('posts_per_page'=>5, 'tag__in' => $tag_ids, 'orderby' => 'relevance');
					$related_post_query = new WP_Query($args);
										
					$related_post_count = 0;
					while( $related_post_query->have_posts() ) {
						$related_post_query->the_post();			
						if (get_the_title()!=$orig_post->post_title) {
							echo '<h3><a href="'. get_the_permalink().'">' . get_the_title() . '</a></h3>';
							$related_post_count = $related_post_count + 1;
						}
					}
					if ($related_post_count==0) echo '<h3>Sorry, no related posts found</h3>';
					
				}
				wp_reset_postdata();
			?>
			</div> <!-- related-posts-outer -->
		</div> <!-- col -->
		
</div> <!-- container-post-inner -->

<?php comments_template(); ?>

<?php get_footer(); ?>