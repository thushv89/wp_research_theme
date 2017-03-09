<?php get_header(); ?>

<div class="blog-post">
<?php while (have_posts()):the_post();?>
<h2  class="blog-post-title"><?php the_title();?></h2>
<p class="blog-post-meta"><a href="#"><?php the_date(); ?></a> by <?php the_author();?></p>
<?php the_content();?>
<?php endwhile; ?>
<hr/>
</div> <!-- blog-post -->