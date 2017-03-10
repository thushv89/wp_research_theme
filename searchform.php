<?php $search_terms = htmlspecialchars( $_GET["s"] ); ?>
<form role="form" action="<?php bloginfo('siteurl');?>/" id="searchform" method="get">
<div class="search-box">
  <div class="search-container">
      <span class="search-icon"><button type="submit" class="btn search-btn"><i class="fa fa-search fa-lg"></i></button></span>
      <input type="text" name="s" class="well search-input" placeholder="deep learning, tensorflow, nlp, cnn,..." value="<?php the_search_query(); ?>"/>
  </div>
</div>
</form>