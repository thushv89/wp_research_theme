<?php
/*
Template Name: interactive-cv
*/

/**
 * Page template - interactive_cv
 *
 */

get_header();
?>

<div class="container-page jumbotron">

<div id="cv_content">
    <div class="cv_div_title"> 
        <?php echo '<img class="cv_title" src="'.get_template_directory_uri().'/images/cv/title_basic.png" alt=""/>' ?> 
        <?php echo '<img class="cv_hr" src="'.get_template_directory_uri().'/images/cv/hr.png" alt=""/>' ?>
    </div>
    
	<div class="cv-basic-container">
		<div id="cv-basic-container-lg" class="cv_div_data container-fluid">

			<div class="row-fluid">			
			
				<div class="col-md-2 col-lg-2 col-sm-2" style="padding-right:0px;">	
					<?php echo '<img src="'.get_template_directory_uri().'/images/cv/profile.png" alt="Profile Image"/>' ?>								
				</div>			
				
				<div class="col-md-8 col-lg-8 col-sm-8">
					<div class="row-fluid">
						<div class="col-md-6 col-lg-6 col-sm-6" style="padding-left:8px;padding-right:5px;" >
							<div id="basic_curr_div" class="flip-container flip">
							   <div id="basic_curr_flipper" class="flipper">
								   <div class="front">
										<?php echo '<img id="cv_img_curr" src="'.get_template_directory_uri().'/images/cv/curr.png" alt="Current"/>' ?>
									</div>
								   <div class="back">
										<?php echo '<img id="cv_img_curr" src="'.get_template_directory_uri().'/images/cv/curr_2.png" alt=""/>' ?>
								   </div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-6 col-sm-6" style="padding-bottom:5px;padding-left:5px;padding-right:8px;">
							<div class="row">
								<div class="col-md-12 col-lg-12 col-sm-12">
									<div id="bsc_div" class="flip-container flip">
										<div class="flipper">
											<div class="front">
													<?php echo '<img id="cv_img_bsc" src="'.get_template_directory_uri().'/images/cv/bsc.png" alt="BSc"/>' ?>
											</div>
											<div class="back">
											   <a href="http://www.thushv.com/wp-content/uploads/2015/11/Academic-Transcript-KMTV-Ganegedara1.pdf" target="_blank"><?php echo '<img id="cv_img_bsc" src="'.get_template_directory_uri().'/images/cv/bsc_2.png" alt="""/>' ?></a>
										   </div>
										</div>
									</div>									
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6 col-lg-6 col-sm-6" >
									<?php echo '<img class="cv_small" src="'.get_template_directory_uri().'/images/cv/class.png" alt="" />' ?>			
								</div>
								<div class="col-md-6 col-lg-6 col-sm-6" >
									<?php echo '<img class="cv_small" src="'.get_template_directory_uri().'/images/cv/gpa.png" alt=""/>' ?>				
								</div>
							</div>
						</div>
					</div>						
					
					<div class="row-fluid">
						<div class="col-md-6 col-lg-6 col-sm-6" style="padding-left:8px;padding-right:5px;">
							<div id="objective_div" class="cv_large flip-container flip">
								<div class="flipper">
								   <div class="front">
								   <?php echo '<img id="cv_img_obj" src="'.get_template_directory_uri().'/images/cv/obj.png" alt="Objective"/>' ?>
									   </div>
									<div class="back">
										<?php echo '<img id="cv_img_obj" src="'.get_template_directory_uri().'/images/cv/obj_2.png" alt=""/>' ?>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-md-6 col-lg-6 col-sm-6" style="padding-left:5px;padding-right:8px;">
							<div class="row">	
								<div class="col-md-12 col-lg-12 col-sm-12">
									<a href="http://www.thushv.com/contact-me/" target="_blank"><?php echo '<img src="'.get_template_directory_uri().'/images/cv/contact.png" alt=""/>' ?></a>												
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-12 col-lg-12 col-sm-12">
									<?php echo '<img src="'.get_template_directory_uri().'/images/cv/phone_num.png" alt=""/>' ?>
								</div>
							</div>
						</div>
					</div>				
				</div>
					
					
				<div class="col-md-2 col-lg-2 col-sm-2" style="padding-left:0px;">	
					<div id="basic_interest_div" class="flip-container flip">
						   <div class="flipper">
								<div class="front">
									<?php echo '<img src="'.get_template_directory_uri().'/images/cv/interests.png" alt=""/>' ?>
								</div>
								<div class="back">
									<?php echo '<img src="'.get_template_directory_uri().'/images/cv/interests_2.png" alt=""/>' ?>
							   </div>
						</div>
					</div>		
				</div>
			</div>
		</div>		
		
		<div id="cv-basic-container-sm">
			<div class="col-xs-4">
				<?php echo '<img src="'.get_template_directory_uri().'/images/cv/profile_comp.png" alt="Profile Image"/>' ?>				
			</div>			
			<div class="col-xs-8">
				<div class="col-xs-3 col-id">
				Name:
				</div>
				<div class="col-xs-9 col-val">
				Thushan Ganegedara
				<p></p>
				</div>				
				<!--div class="col-xs-12 visible-sm-inline-block"><p></p></div-->
				<div class="col-xs-3 col-id">
				Current:
				</div>
				<div class="col-xs-9 col-val">
				PhD in Engineering<br/>University of Sydney
				<p></p>
				</div>				
				<div class="col-xs-3 col-id">
				Previous:
				</div>
				<div class="col-xs-9 col-val">
				BSc. Eng (Comp. Sci.)<br/>University of Moratuwa, Sri Lanka
				<p></p>
				</div>				
				<div class="col-xs-3 col-id">
				Contact:
				</div>
				<div class="col-xs-9 col-val">
				thushv@gmail.com<p></p>
				</div>
				<div class="col-xs-12 col-tip">
				Checkout this website on a Larger<br/>
				Screen(>787px) for a more AWESOME version
				</div>
			</div>					
	</div>
	
	<div id="cv-basic-container-xxs">
				<div class="col-xs-4 col-xs-offset-4">
					<?php echo '<img src="'.get_template_directory_uri().'/images/cv/profile_comp.png" alt="Profile Image"/>' ?>				
				</div>			
				<div class="col-xs-12">
					<div class="col-xs-3 col-id">
					Name:
					</div>
					<div class="col-xs-9 col-val">
					Thushan Ganegedara				
					</div>				
					<!--div class="col-xs-12 visible-sm-inline-block"><p></p></div-->
					<div class="col-xs-3 col-id">
					Current:
					</div>
					<div class="col-xs-9 col-val">
					PhD in Engineering, University of Sydney				
					</div>				
					<div class="col-xs-3 col-id">
					Previous:
					</div>
					<div class="col-xs-9 col-val">
					BSc. Eng (Comp. Sci.), University of Moratuwa, Sri Lanka				
					</div>				
					<div class="col-xs-3 col-id">
					Contact:
					</div>
					<div class="col-xs-9 col-val">
					thushv@gmail.com<p></p>
					</div>
					<div class="col-xs-12 col-tip">
						Checkout this website on a Larger Screen(>787px) for a more AWESOME version
					</div>
				</div>
			</div>

    <div class="cv_div_title"> 
        <?php echo '<img class="cv_title" src="'.get_template_directory_uri().'/images/cv/title_awards.png" alt=""/>' ?> 
        <?php echo '<img class="cv_hr" src="'.get_template_directory_uri().'/images/cv/hr.png" alt=""/>' ?>
    </div>

    <div class="cv_div_data">
    <div class="slider1">
        <div class="slide"><?php echo '<img src="'.get_template_directory_uri().'/images/cv/award_4.png" alt=""/>' ?></div>                       
        <div class="slide"><?php echo '<img  src="'.get_template_directory_uri().'/images/cv/award_1.png" alt=""/>' ?></div>
        <div class="slide"><?php echo '<img src="'.get_template_directory_uri().'/images/cv/award_2.png" alt=""/>' ?></div>    
        <div class="slide"><?php echo '<img src="'.get_template_directory_uri().'/images/cv/award_3.png" alt=""/>' ?></div>            
    </div>
        
        <div id="cv_award_desc"><p></p></div>
    </div>
  
    <div class="cv_div_title"> 
        <?php echo '<img class="cv_title" src="'.get_template_directory_uri().'/images/cv/title_experience.png" alt=""/>' ?> 
        <?php echo '<img class="cv_hr" src="'.get_template_directory_uri().'/images/cv/hr.png" alt=""/>' ?>
    </div>
    
    <div class="cv_div_data">
        
        <div class="cv_exp_tile">
            <a href="#99xToggle" class="hcaption" cap-effect="slide">
                <?php echo '<img class="company_logo" src="'.get_template_directory_uri().'/images/cv/exp_99x.png" alt=""/>' ?>
            </a>
            <div id="99xToggle" class="cap-overlay" >
                <h5>99x Technology</h5>
                <div class="content">
                    <p>I did my internship in 99x Technology which broadened<br/>my knowledge and gave me the opportunity<br/>to overcome various challenges.</p>
                    <a href="javascript:expPopupFunc('#cv_99x_popup');" class="button small" id="99x_popup_btn"><i class="icon-edit"></i> Read More</a>                 
                </div>
            </div>
        </div>   
        <div class="cv_exp_popup_container" id="cv_99x_popup"> <span>
            As one of the Highest GPA holders during my undergrads, I did my internship with one of the locally leading giants in software industry; 99x Technology. My time at 99x Technology, enabled me to step out of my comfort zone and cope with novel technologies. 
<ul>
<li>Achievements
    <ul>
        <li>Competence in mobile application development; Android, iOS and Windows </li>
		<li>Exposure to Code repositories and test-driven development</li>
		<li>Televisionary - First Windows Mobile Application of 99x Technology</li>
        <li>Member of the organizing committee of several locally recognized events</li>        
    </ul>
</li>

<li>Responsibilities</li>
<ul>
<li>Developing softwares while collaborating with the deveoloper team </li>
<li>Organizing events aiming to improve non-technical skills</li>
</ul>

    </ul></span>
    </div>
        
        <div class="cv_exp_tile">
            <a href="#benetechToggle" class="hcaption" cap-effect="slide">
                <?php echo '<img class="company_logo" src="'.get_template_directory_uri().'/images/cv/exp_benetech.png" alt=""/>' ?>
            </a>
            <div id="benetechToggle" class="cap-overlay">
                <h5>Benetech</h5>
                <div class="content">
                    <p>Worked with Benetech for GSOC 2012. It was exciting to work<br/>work with an overseas organization remotely.</p>
                    <a href="javascript:expPopupFunc('#cv_benetech_popup');" class="button small"><i class="icon-edit"></i> Read More</a>                 
                </div>
            </div>
        </div>    
        <div class="cv_exp_popup_container" id="cv_benetech_popup"><span>
			<ul>
			<li>Summary</li>
			<ul>
				<li>Working with Benetech (A US-based company) through GSOC 2012 was a thoroughly enjoyable experience. Furthermore, this opportunity helped me to build my character by driving me out of my comfort-zone to collaborate with people with various personal and technical backgrounds.</li>
			</ul>
			<li>Achievements</li>
			<ul>
			<li>Successfully completed my project allowing the implemented functionality to be used by the customers</li>
			<li>Gained experience in working with overseas company</li>
			<li>Earned a positive recommendation from my mentor on LinkedIN</li>
			</ul>
			<li>Responsibilities</li>
			<ul>
			<li>Implementing perodical (i.e. Newspaper/Magazine) downloadability to an accessible Ebook reader (Go-Read)</li>
			<li>Implementing an automatic periodical download through a subscription feature for users</li>
			<li>Engaging in frequent meetins with my mentor to discuss the progress and plan ahead</li>
			</ul>
			</ul>

            </span> 
        </div>
        
        <div class="cv_exp_tile">
            <a href="#zoneToggle" class="hcaption" cap-effect="slide">
                <?php echo '<img class="company_logo" src="'.get_template_directory_uri().'/images/cv/exp_zone.png" alt=""/>' ?>
            </a>
            <div id="zoneToggle" class="cap-overlay">
                <h5>Zone 24x7</h5>
                <div class="content">
                    <p>I worked as an Associate Research Assistant in<br/>Zone 24x7. During this, I extended my undergraduate<br/>research  to solve an industrial problems.</p>
                    <a href="javascript:expPopupFunc('#cv_zone_popup');" class="button small"><i class="icon-edit"></i> Read More</a>                 
                </div>
            </div>
        </div> 
        <div class="cv_exp_popup_container" id="cv_zone_popup"><span>
            I worked at Zone 24x7 as an Associate Research Assistant. The project was an collaborative project between Zone24x7 and University of Moratuwa, Sri Lanka and Deakin University, Australia. It was first of its kind in Sri Lanka as the objective of the project was to test the feasibility of state-of-the-art Machine Learning techniques to solve real world problems.

The project was to identify business value of monitoring retail equipment status. And then use automated analysis and machine learning techniques to extract useful information about correlations and infer reasons behind equipment failures.
            </span>
        </div>
        
        <div class="cv_exp_tile">
            <a href="#wso2Toggle" class="hcaption" cap-effect="slide">
                <?php echo '<img class="company_logo" src="'.get_template_directory_uri().'/images/cv/exp_wso2.png" alt=""/>' ?>
            </a>
            <div id="wso2Toggle" class="cap-overlay">
                <h5>WSO2</h5>
                <div class="content">
                    <p>I was privileged to collaborate with WSO2 for<br/>GSOC 2015. This gave me an opportunity<br/>to use my research in a real world problem.</p>
                    <a href="javascript:expPopupFunc('#cv_wso2_popup');" class="button small"><i class="icon-edit"></i> Read More</a>                 
                </div>
            </div>
        </div> 
        <div class="cv_exp_popup_container" id="cv_wso2_popup"><span>
            Working with WSO2 for GSOC 2015 was indeed a great learning and joyful experience for me. WSO2 is one of the pioneers in the open-source world and is a world-class Software Conglomerate. In this project I worked with one of their blossoming open-source product called WSO2 Machine Learner (WSO2-ML).

My project specifically was to integrate Deep Learning to WSO2-ML. Deep Learning is a highly-recognized frontier in Machine Learning due to the ample breakthroughs it made in various domains. Being a graduate student working specifically in the field of Deep Learning, this was an ideal opportunity for me to fuse my knowledge with industrial professionals to produce something amazing.

My project consisted of 3 main components. They are,
            <ul>
                <li>Find a reliable and promising Java Deep Learning library</li>
                <li>Integrate it to WSO2-ML and configure the library correctly while giving user the freedom for basic configurations</li>
                <li>Visualize the deep network during the set-up</li>
            </ul>
            </span>
        </div>
    </div>
    
    <div class="cv_div_title"> 
        <?php echo '<img class="cv_title" src="'.get_template_directory_uri().'/images/cv/title_skills.png" alt=""/>' ?> 
        <?php echo '<img class="cv_hr" src="'.get_template_directory_uri().'/images/cv/hr.png" alt=""/>' ?>
    </div>
    
    <div class="cv_div_data" id="cv-div-skills-container">
        
		<div class="cv-skill-div-lg-container">
		<table class="cv-skill-table-lg">
			<tbody>
				<tr class="cv-skill-row">
					<th class="cv-skill-col-1 cv-skill-title-left">
					Skill
					</th>				
					<th class="cv-skill-col-2 cv-skill-title-middle">Minimum</th>
					<th class="cv-skill-col-2 cv-skill-title-middle">Below Average</th>
					<th class="cv-skill-col-2 cv-skill-title-middle">Average</th>
					<th class="cv-skill-col-2 cv-skill-title-middle">Above Average</th>
					<th class="cv-skill-col-2 cv-skill-title-right">Expert</th>				
				</tr>
				
				<tr class="cv-skill-row">
					<td class="cv-skill-col-1">Deep Learning</td>
					<td class="cv-skill-col-3" colspan="5">
						<?php echo '<img src="'.get_template_directory_uri().'/images/cv/skills_100.png" alt=""/>' ?>
					</td>
				</tr>
				
				<tr class="cv-skill-row">
					<td class="cv-skill-col-1">Robotics</td>
					<td class="cv-skill-col-3" colspan="5">
						<?php echo '<img src="'.get_template_directory_uri().'/images/cv/skills_80.png" alt=""/>' ?>
					</td>
				</tr>
				
				<tr class="cv-skill-row">
					<td class="cv-skill-col-1">Python</td>
					<td class="cv-skill-col-3" colspan="5">
						<?php echo '<img src="'.get_template_directory_uri().'/images/cv/skills_80.png" alt=""/>' ?>
					</td>
				</tr>
				
				<tr class="cv-skill-row">
					<td class="cv-skill-col-1">ROS</td>
					<td class="cv-skill-col-3" colspan="5">
						<?php echo '<img src="'.get_template_directory_uri().'/images/cv/skills_80.png" alt=""/>' ?>
					</td>
				</tr>
				
				<tr class="cv-skill-row">
					<td class="cv-skill-col-1">Web</td>
					<td class="cv-skill-col-3" colspan="5">
						<?php echo '<img src="'.get_template_directory_uri().'/images/cv/skills_80.png" alt=""/>' ?>
					</td>
				</tr>
				
				<tr class="cv-skill-row">
					<td class="cv-skill-col-1">Java</td>
					<td class="cv-skill-col-3" colspan="5">
						<?php echo '<img src="'.get_template_directory_uri().'/images/cv/skills_60.png" alt=""/>' ?>
					</td>
				</tr>
				
				<tr class="cv-skill-row">
					<td class="cv-skill-col-1">Android</td>
					<td class="cv-skill-col-3" colspan="5">
						<?php echo '<img src="'.get_template_directory_uri().'/images/cv/skills_60.png" alt=""/>' ?>
					</td>
				</tr>
				
				<tr class="cv-skill-row">
					<td class="cv-skill-col-1">iOS</td>
					<td class="cv-skill-col-3" colspan="5">
						<?php echo '<img src="'.get_template_directory_uri().'/images/cv/skills_40.png" alt=""/>' ?>
					</td>
				</tr>	
			</tbody>
		</table>		
		</div>
		
		<table class="cv-skill-table-sm">
			<tr>
			<th class="cv-skill-col-1 cv-skill-title-left">Skill</th>
			<th class="cv-skill-col-2 cv-skill-title-right">Level</th>
			</tr>
			<tr>
				<td class="cv-skill-col-1">Deep Learning</td>
				<td class="cv-skill-col-2">Expert</td>			
			</tr>
			<tr>
				<td class="cv-skill-col-1">Robotics</td>
				<td class="cv-skill-col-2">Above Average</td>			
			</tr>			
			<tr>
				<td class="cv-skill-col-1">Python</td>
				<td class="cv-skill-col-2">Above Average</td>			
			</tr>
			<tr>
				<td class="cv-skill-col-1">ROS</td>
				<td class="cv-skill-col-2">Above Average</td>			
			</tr>
			<tr>
				<td class="cv-skill-col-1">Web</td>
				<td class="cv-skill-col-2">Above Average</td>
			</tr>
		</table>			
    </div>
    
    <div class="cv_div_title"> 
        <?php echo '<img class="cv_title" src="'.get_template_directory_uri().'/images/cv/title_projects.png" alt=""/>' ?> 
        <?php echo '<img class="cv_hr" src="'.get_template_directory_uri().'/images/cv/hr.png" alt=""/>' ?>
    </div>
    
    <div class="cv_div_data">
        <a href="https://github.com/thushv89/AutoEncorder_Simple" target="_blank"><?php echo '<img class="cv_project_entry" src="'.get_template_directory_uri().'/images/cv/project_sae.png" alt=""/>' ?></a>
        <a href="http://weave-d.com" target="_blank"><?php echo '<img class="cv_project_entry" src="'.get_template_directory_uri().'/images/cv/project_weaved.png" alt=""/>' ?></a>
        <a href="https://github.com/thushv89/GSOM-Zone" target="_blank"><?php echo '<img class="cv_project_entry" src="'.get_template_directory_uri().'/images/cv/project_som.png" alt=""/>' ?></a>
        <a href="https://github.com/thushv89/GO-Reminder" target="_blank"><?php echo '<img class="cv_project_entry" src="'.get_template_directory_uri().'/images/cv/project_go.png" alt=""/>' ?></a>
    </div>
    
</div>
</div>
</div> <!-- jumbotron --> 


<?php
	get_footer();
?>
