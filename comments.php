<?php if(have_comments()):?>
<div class="container-comments-topic row">
	<h4 id="comments"><?php comments_number('No Comments','One Comment', '% Comments');?></h4>
</div>
	
<div class="container-comments">	
	<div class="row">
	<ul class="comments-list">
		<?php wp_list_comments('callback=custom_comments');?>
	</ul>
	</div>
</div>
<?php endif; ?>

<?php if ( comments_open() ) : ?>
<div class="container-comments">
	<div class="container-comments-inner">
	<form>
	<div class = "row">
	  <div class="form-group col-md-5">	 
		<label for="exampleInputEmail1">Email address</label>
		<input type="email" class="form-control" id="exampleInputEmail1" placeholder="john@smith.com">		
	  </div>	  
	  <div class="form-group col-md-5">	  
		<label for="exampleName">Name</label>
		<input type="name" class="form-control" id="exampleName" placeholder="John Smith">		
	  </div>
	  </div>
	  <div class="form-group col-md-10">
		<label for="comment">Comment</label>
		
		<textarea class="form-control input-lg" name="comment" id="comment" tabindex="4" placeholder="Type your comment here..."></textarea>
		<span class="help-block"><small>You can use these HTML tags:<br /><code><?php echo allowed_tags(); ?></code></small></span>
		
		</div> <!-- .form-group -->

	  <button type="submit" class="btn btn-default">Submit</button>
	</form>
	</div>
</div>
<?php do_action('comment_form', $post->ID); ?>
<?php endif; ?>