
/*
window.addEventListener('load', function(){
    var currDiv = document.getElementById('basic_curr_div');    
    
    isTouchDevice = 'ontouchstart' in document.documentElement;        
    
    currDiv.addEventListener("touchstart", 
        function(e){ 

            if(isTouchDevice){
                 currDiv.classList.add('flip');                    
               
                setTimeout(function(){                                
                    currDiv.classList.remove('flip');                    
                }, 3000);
            }
        }, false);
},false);*/
   
    
var isTouchDevice = false;
    
$(window).load(function(){
    
    $('.hcaption').hcaptions();
    var w = $('.cv_exp_tile').attr('width');
    $('.hcaption').hcaptions({       
      
    });     
});
    
var done=false;
    
/*$( window ).scroll(function() {    
  if(!done && window.pageYOffset>1600){
      done=true;
      //code what what to happen after scrolling to this point
    $(".cv_pop_up").velocity({        
        width:"160px",        
        left:"-=10%",           
    });
  }
});*/


    
function expPopupFunc(classStr){
    $('cv_exp_popup_container').attr('align','center');
    $(classStr).bPopup();    
};

function getBXSlider(w){
    $('.slider1').bxSlider({
        slideWidth: parseInt(w),
        minSlides: 2,
        maxSlides: 3,
        moveSlides:1,
        slideMargin: 10,

        onSlideAfter: function($slideElement, oldIndex, newIndex){
            /*slider = $('.slider1').bxSlider();
            var current = slider.getCurrentSlide();  */

            if(newIndex==0){
                $('#cv_award_desc p').text('During my undergraduates, my persistency in studies has won me awarded Dean\'s List in Semester 1, 2, 3, 4, 7 and 8 with a cumulative GPA of 3.92.' );        
            } else if(newIndex==1){
                $('#cv_award_desc p').text('Completed Google Summer Of Code in 2012. I did my project with Benetech Organization, an organization based in USA. GO-Read is an ebook-reader with accessibility for users with print disabilities.');
            } else if(newIndex==2){
                $('#cv_award_desc p').text('I completed Google Summer Of Code in 2015. I did my project with WSO2 Organization, a software company based in Sri Lanka and USA. I worked with WSO2 Machine Learner; one of their popular open-source products');
            } else if(newIndex==3){
                $('#cv_award_desc p').text('Speech Olympiad is one of the most sought-after public speaking competition held annually in Sri Lanka. I was placed as a semi-finalist');
            }                
        }
      });
};
    
$(document).ready(function(){
    
	$(".cv-skill-table-lg").children().hover(
		function(){
			$(this).unbind('mouseenter mouseleave');
		}
		
	);
	
    $('#cv_award_desc p').text('During my undergraduates, I have been quite persistent in my studies. I have been awarded Dean\'s List in Semester 1, 2, 3, 4, 7 and 8 with a cumulative GPA of 3.92.' );       
    if(($(window)).width()>600){
       getBXSlider(180);        
    } else {
        getBXSlider(90);
        $("#cv_skill_pyt_span").text('Expert');
		$("#cv_skill_ros_span").text('Above Average');
        $("#cv_skill_jav_span").text('Above Average');
        $("#cv_skill_web_span").text('Above Average');
        $("#cv_skill_and_span").text('Average');
        $("#cv_skill_ios_span").text('Average');        
    }
});  

$(document).ready(function(){	
	var base_interval = 4000;
	var rand_interval = 3500;
	window.setInterval(function(){
		document.querySelector("#basic_curr_div").classList.toggle('flip');		
	}, base_interval+Math.floor(Math.random() * rand_interval));
	
	window.setInterval(function(){
		document.querySelector("#objective_div").classList.toggle('flip');		
	}, base_interval+Math.floor(Math.random() * rand_interval));
	
	window.setInterval(function(){
		document.querySelector("#bsc_div").classList.toggle('flip');		
	}, base_interval+Math.floor(Math.random() * rand_interval));
	
	window.setInterval(function(){
		document.querySelector("#basic_interest_div").classList.toggle('flip');		
	}, base_interval+Math.floor(Math.random() * rand_interval));
});