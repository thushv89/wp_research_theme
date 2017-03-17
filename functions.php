<?php
/* Theme setup */
add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'primary', __( 'Primary navigation', 'thushv' ) );
        } endif;
		

/*function wpt_register_js() {
    wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery');
    wp_enqueue_script('jquery.bootstrap.min');
}
add_action( 'init', 'wpt_register_js' );

function wpt_register_css() {
    wp_register_style( 'bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap.min' );
}
add_action( 'wp_enqueue_scripts', 'wpt_register_css' );*/

function wp_about_me_register_css() {
	if (is_page('about')){
		wp_register_style( 'about-me.css', get_template_directory_uri() . '/css/page-about-me.css' );
		wp_enqueue_style( 'about-me.css' );
	}
}
add_action( 'wp_enqueue_scripts', 'wp_about_me_register_css' );

require_once('wp_bootstrap_navwalker.php');


function wp_online_cv_css(){
	//css
	if (is_page('online-cv')){
		wp_register_style('jquery-bxslider',get_template_directory_uri(). '/js/jquery.bxslider.css');
		wp_enqueue_style('jquery-bxslider');		
		
		wp_register_style('online-cv', get_template_directory_uri(). '/css/page-online-cv.css');
		wp_enqueue_style('online-cv');	
		
		//wp_deregister_style('bootstrap-4');
		//wp_dequeue_style('bootstrap-4');
		wp_register_style('bootstrap-3', get_template_directory_uri(). '/css/bootstrap.min.css');
		wp_enqueue_style('bootstrap-3');
		
		$bg_css = ".container-page{
			background-image: url('". get_template_directory_uri() ."/images/cv/bg.png');		
			background-repeat: no-repeat;
			background-size: cover;	
		}";
		wp_add_inline_style('online-cv', $bg_css );
	}
}

function wp_online_cv_js(){
	//javascript	
	if (is_page('online-cv')){
		// This page requires jquery 1.8.x to work. doesnt work with jquery 3.1.1
		wp_register_script('jquery-min', get_template_directory_uri(). '/js/jquery.min.js');
		wp_enqueue_script('jquery-min',$in_footer=True);		
		
		wp_register_script('jquery-bxslider-js', get_template_directory_uri(). '/js/jquery.bxslider.min.js');		
		wp_enqueue_script('jquery-bxslider-js',$in_footer=True);		
		
		//registering jquery-hcaption
		wp_register_script('jquery-hcaption',get_template_directory_uri(). '/js/jquery.hcaptions.js');		
		wp_enqueue_script('jquery-hcaption',$in_footer=True);		
		
		//registering velocity-js
		wp_register_script('velocity-js', get_template_directory_uri(). '/js/velocity.min.js');		
		wp_enqueue_script('velocity-js',$in_footer=True);	
		
		//registering bpopup-js
		wp_register_script('bpopup-js',get_template_directory_uri(). '/js/bpopup.min.js');		
		wp_enqueue_script('bpopup-js',$in_footer=True);		
		
		//registering my online-cv.js remember to add all the dependencies
		wp_register_script('online-cv-js',get_template_directory_uri(). '/page-online-cv.js',array('jquery-min','jquery-bxslider-js','jquery-hcaption','velocity-js','bpopup-js'),'',true);
		wp_enqueue_script('online-cv-js',$in_footer=True);		
	}
}

add_action('wp_enqueue_scripts', 'wp_online_cv_css');
add_action('wp_enqueue_scripts', 'wp_online_cv_js');


function getTitlesWithTags($html, $tagnames) {
    // Create DOM from string
	$dom = new DOMDocument;
	libxml_use_internal_errors(true);
	$dom->loadHTML($html);
	libxml_clear_errors();
    // key value repo where key is line number and value is the string
	$titles = array();
	
	$k = 0;
    // Find all tags 
	foreach($tagnames as $tag) {
		$elements = $dom->getElementsByTagName($tag);
		//add no table of content message if there are no elements		
		foreach($elements as $ele) {		
			$titles[$ele->getLineNo()] = $ele->nodeValue;					
		}		
	}
	ksort($titles);
	// echo the titles in the order of the line number
	foreach($titles as $l=>$t){
		$tokens = explode(" ",$t);
		if(sizeof($tokens)>=2){
			$a_id = strtolower($tokens[0] . '-'. $tokens[1]);			
		}
		else{
			$a_id = strtolower($tokens[0]);			
		}
		echo '<li class="nav-item"> <a class="nav-link" href="#' . 
			$a_id . '">' . $t .'</a></li>';
	}
}

// this method gets the content and add divs between content 
// so I can add post jumps
/*function formatContentWithDivs($html, $titles){
	// Create DOM from string
	$dom = new DOMDocument;
	$dom->loadHTML($html);
	
	$k=0;
	foreach($titles as $l=>$t){
		wrapContentWithDiv($start_line,$to_line);
			
		$k=$k+1;
	}
	
	function wrapContentWithDiv($node, $start_line,$to_line){
		foreach($node -> childeNodes as $cnode){
			
		}
	}
	
	// echo the titles in the order of the line number
	foreach($titles as $l=>$t){
		echo '<li class="nav-item">' .'<a>' . $t .'</a class="nav-link"></li>';
	}	
}*/

function custom_comments($comment, $args, $depth){
	//assigning global $comment to local $comment
	$GLOBALS['comment'] = $comment; 
	//comment class is a way of giving a unique class for comments for styling purposes
	if ($comment -> comment_approved=='1'): ?>		
		<li <?php comment_class(); ?> id="li-comment-<?php comment_ID();?>">	
		<div id="comment-<?php comment_ID();?>" class="comment-div">		
			<?php comment_text();?>
			<div class="comment-author author-vcard">
				<?php echo get_avatar($comment,$size='24'); ?>
				<cite class="comment-author-text"><span><?php echo comment_author();?> said: </span></cite>
			</div>
			<div class="reply">
			<?php echo comment_reply_link(array_merge($args,array('depth'=>$depth,'max_depth'=>$args['max_depth'],'reply_text'=>'Reply')));?>
			</div>
		</div>
		</li>
	<?php endif;
}?>