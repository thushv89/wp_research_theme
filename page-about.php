<?php
/*
Template Name: about_me
*/

/**
 * Page template - about_me
 *
 * @package    Modern
 * @copyright  Thushan Ganegedara
 * @version    1.0
 */

get_header();		
?>

<div class="container-about-me-page jumbotron">
	<div class="row">
	<div class="container-about-big-outer col-md-8">
		<div class="card container-text">			
		  <h3 class="card-header">About Me</h3>
		  <div class="card-block">			
			<p class="card-text">This is Thushan Ganegedara. I am one of the rare gems of this planet who can't keep my feet down when reading about the advances in Machine Learning. Believing that the robotics apocalypse is too far for me to live to see, I'm strongly for Machine Learning as it enables humans to reach new heights in both the Industry and Research.  Beside spending my day drowning in thousands of lines of code, I also have a sweet tooth for music, drawing and spiritual side as well.</p>			
		  </div>
		</div>
		<div class="card container-text">
			<h3 class="card-header"> Education </h3>			
			<ul class="list-group list-group-flush">
				<li class="list-group-item"><span class="attribute">Current</span><span class="value">PhD, School of IT, University of Sydney, AU</span></li>
				<li class="list-group-item"><span class="attribute">Previous</span><span class="value">BSc (Eng) Dept of Comp Sci &amp; Eng, University of Moratuwa, SL</span></li>
			</ul>			
		</div>
		<div class="card container-text">
			<h3 class="card-header"> Skills </h3>			
			<ul class="list-group list-group-flush">
			<li class="list-group-item"><span class="attribute">Programming</span><span class="value">Python/C++, Tensorflow/Theano/Caffe , ROS, CSS/HTML</span></li>
			<li class="list-group-item"><span class="attribute">Research Interests</span><span class="value">Machine Learning, Deep Learning, Robotics</span> </li>
			</ul>
		</div>
		
		
	</div>
	
	<div class="container-about-small-outer col-md-4">
		<div id="container-profile-pic" class="container-resources hidden-sm-down">
		<?php echo '<img src= "'. get_template_directory_uri() . '/images/about-me/profile-2.jpg" alt="Profile Pic" />'?>
		</div>
		<div class="card container-resources">
			<h3 class="card-header">Contact</h3>
			<ul class="list-group list-group-flush">
			<li class="list-group-item"><span class="attribute">E-Mail</span><span class="value">thushv@gmail.com</span></li>
			<li class="list-group-item"><span class="attribute">Phone</span><span class="value">(+61) 435 089 567</span></li>
			<li class="list-group-item"><span class="attribute">Affiliation</span><span class="value">University of Sydney</span></li>
			
			<li class="list-group-item"><span class="attribute">Social Media</span><span class="value"><div id="social">
				<a href="https://www.facebook.com/thushv" target="_blank">
					<?php echo '<img class="sm_icon" src= "'. get_template_directory_uri() . '/images/about-me/facebook.png" alt="Facebook" />'?>
				</a>
				<a href="https://plus.google.com/u/0/+ThushanGanegedara" target="_blank">
					<?php echo '<img class="sm_icon" src= "'. get_template_directory_uri() . '/images/about-me/google.png" alt="Google" />'?>
				</a>
				<a href="https://lk.linkedin.com/in/thushanganegedara" target="_blank">
					<?php echo '<img class="sm_icon" src= "'. get_template_directory_uri() . '/images/about-me/linkedin.png" alt="LinkedIN" />'?>    
				</a>
				<a href="#" target="_blank">
					<?php echo '<img class="sm_icon" src= "'. get_template_directory_uri() . '/images/about-me/skype.png" alt="Skype" />'?>
				</a>
				<a href="#" target="_blank">
					<?php echo '<img class="sm_icon" src= "'. get_template_directory_uri() . '/images/about-me/twitter.png" alt="Twitter" />'?>
				</a>
			</div></span>		
			</li>
			</ul>
		</div>
		<div class="card container-resources">
			<h3 class="card-header">Documents</h3>
			
			<ul class="list-group list-group-flush">
				<li class="list-group-item"><span class="attribute">Resume</span>
					<span class="value"><a href="http://www.thushv.com/wp-content/uploads/2015/11/Curriculum-Vitae-KMTV-Ganegedara1.pdf" target="_blank"> 
						<?php echo '<img id="pdf_link" src="'.get_template_directory_uri().'/images/about-me/pdf_icon.png" alt=""/>' ?>    
					</a> 
					OR
					<a href="http://www.thushv.com/online-cv/">
						<?php echo '<img id="online_link" src="'.get_template_directory_uri().'/images/about-me/online_cv_icon.png" alt=""/>' ?>   </a> 
				</span></li>
				
				<li class="list-group-item"><span class="attribute">Transcript (BSc)</span>
					<span class="value"><a href="http://www.thushv.com/wp-content/uploads/2015/11/Academic-Transcript-KMTV-Ganegedara1.pdf" target="_blank"> 
					<?php echo '<img id="pdf_link" src="'.get_template_directory_uri().'/images/about-me/pdf_icon.png" alt=""/>' ?>  
					</a>
				</span></li>			
			</ul>

		</div>
	</div>
	</div>
</div>
    
<?php get_footer();?>
