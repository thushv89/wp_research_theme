<?php get_header(); ?>

<div class="container-post jumbotron">
<div class="container-post-inner">
<?php while (have_posts()):the_post();?>
<h2  class="single-post-title"><?php the_title();?></h2>

<p class="blog-post-meta"><a href="#"><?php the_date(); ?></a> by <?php the_author();?></p>
<hr/>
<?php the_content();?>
<?php endwhile; ?>
<hr/>
</div> <!-- container-post -->
</div> <!-- container-post-inner -->