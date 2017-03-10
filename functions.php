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

require_once('wp_bootstrap_navwalker.php');


function getTitlesWithTags($html, $tagnames) {
    // Create DOM from string
	$dom = new DOMDocument;
	$dom->loadHTML($html);
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
?>
