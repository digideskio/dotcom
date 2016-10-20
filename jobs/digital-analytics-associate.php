<?php
$title=" Digital Analytics Associate";
$description="Praytell is a Brooklyn-based creative communications agency blending traditional PR with new school social and digital. An experienced team with media, design, and tech chops ready to shake things up.";
$breadcrumb="Jobs";
 ?>


<?php 
   include($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"); 
?>   


		
		<div class="main-container">
		<section class="hero-slider large-image fixed-header short-header">
				<ul class="slides">
		
					<li>
						<div class="background-image-holder gradient-overlay">
							<img alt="Slide Background" class="background-image" src="img/jobs1.jpg">
						</div>
		
						<div class="container vertical-align">
							<div class="row">
								<div class="col-md-8 col-md-offset-2 text-center">
									<h1 class="text-white"><span id="typed"></span></h1>
                                    <h3 class="text-white">Praytell</h3>
								</div>
							</div>
						</div>	
					</li>
				</ul>
			</section>
			
			<section class="text-hero-2">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 col-sm-12">
							
                                <p class="super-lead">Praytell is looking for a Digital Analytics Associate to join our creative communications agency. We're 40+ strong in Brooklyn and beyond, with PRWeek Agency of the Year, Holmes Best New Agency and PRWeek Best Places to Work awards under our belt.</p>

								<p class="lead">We've got killer client partners, culture you can’t beat and serious momentum. Real talk, if you’re analytical, super detail oriented and interested in combining ideas, behavioral insights and creative executions into breakthrough social media campaigns, this is the gig you’ve been waiting for.</p>
                                
                                <p>To support our smart and passionate team, we’re looking to hire a Digital Analytics Associate with 1 year of experience or less. If you’re interested in helping us define the future of advertising, are deeply curious about how people behave online, don’t mind spending hours in a spreadsheet in order to organize and analyze data, and take pride in presenting your work, then we want to hear from you.</p>
                                
                                <p>If it sounds like a fit, send us an email at <a href="mailto:jobs@praytellagency.com">jobs@praytellagency.com</a> that tells us why you're the right person to join us (GIFs = bonus points). And like any good pitch, the subject line matters, big time.</p>

						</div>
					</div>
				</div>
			</section>	
            
	<section class="col-3-text">
				<div class="container">
                
                	<div class="row">
                    	<div class="col-md-8 col-md-offset-2 col-sm-12">
                        
                        <h3 class="color-accent">Role</h3>
                        <p>Digital Analytics Associate</p>
                        
                        <h3 class="color-accent">Time commitment</h3>
                        <p>Full Time</p>
                        <h3 class="color-accent">Location</h3>
                        <p>Brooklyn</p>
                        
                        <h3 class="color-accent">Key Responsibilities</h3>
                                
                                <ul class="bullets">
                                	<li>Conduct research on target audiences based on their social media behaviors and interests and make recommendations for target audience segments.</li>
<li>Monitor campaigns (with strong attention to detail) and analyze performance in order to provide recommendations for optimizations. Be willing to monitor outside of normal business hours on occasion when it’s necessary.</li>
<li>Create insightful, visual reporting presentations for clients with recommendations and optimization ideas.</li>
<li>Collaborate with internal colleagues on the creative, strategy and account management teams, as well as external platform partners to help bring advertising recommendations to life in the most effective and efficient way.</li>
<li>Develop a solid understanding of consumer and industry insights to help provide recommendations based on client’s needs and business goals.</li>
<li>Help create recommendations and presentation materials about when and where a client’s advertising dollars should be spent across social platforms including but not limited to Facebook, Twitter, Instagram, LinkedIn and Snapchat.</li>
<li>Become a master of the capabilities of each social platform and be able to articulate how we can utilize new ad products (and be ready for quizzes).</li>
<li>Learn how to make educated placement recommendations using data from the industry and fundamental media math calculations (which we will train you on).</li>
<li>Learn about your client's business, including the industry, category, and your client’s competitors.</li>
<li>Monitor campaigns to ensure KPIs are being met and budget is being spent in full.</li>
                          </ul>
                                
								<h3 class="color-accent">Qualifications</h3>
                                
                                <ul class="bullets">
                                	<li>Recent college graduate with 0-1 years of experience at a digital or social agency or in-house with consumer brands</li>
<li>Passion for combining data and creativity</li>
<li>Analytical knowhow</li>
<li>Microsoft Excel proficiency - expert level preferred</li>
<li>Experience with Sprinklr and/or native platforms (Facebook, Twitter, etc.) is preferred but not required</li>
<li>Understands what A+ digital customer service entails</li>
<li>Ability to offer strategic advice and recommendations that drive results</li>
<li>Excellent writing and communication skills</li>
<li>Strong organization skills to manage multiple projects and client requests, etc.</li>
<li>Idea machine, big and small</li>
<li>Positive attitude, willingness to contribute at all levels</li>
<li>Strong level of integrity, autonomy and self-motivation</li>
<li>Passion for greater good work</li>
<li>Curious, eager to learn and enjoy a good happy hour once in awhile!</li>
                                </ul>
                                
						<p>Be sure to check us out on <a href="https://www.facebook.com/PraytellAgency/" target="_blank">Faceboo</a>k and <a href="https://twitter.com/praytellagency" target="_blank">Twitter</a>. Caution, it gets weird!</p> 
                        
                                         	</div>
                    </div>
				</div>
			</section>            
            		
			<section class="dark-action">
		
				<div class="background-image-holder dark-overlay">
					<img alt="Slide Background" class="background-image" src="img/jobs3.jpg">
				</div>
		
				<div class="container">
						<div class="row">
							<div class="col-md-8 col-md-offset-2 col-sm-12 text-center">
								<h3 class="text-white">Join Our Team</h3>
								<a class="btn btn-white btn-filled" href="mailto:jobs@praytellagency.com?subject=Digital Analytics Associate"><i class="icon icon_mail"></i>&nbsp; Apply Now</a>
							</div>
						</div>
				</div>
			</section>
            
            
			</section>
            
            
<?php 
   include($_SERVER['DOCUMENT_ROOT'] . "/includes/job-footer.php"); 
?>  
        
<script>
        $(function(){
    
            $("#typed").typed({
                strings: [ "Digital Analytics Associate"],
                typeSpeed: 2,
                backDelay: 2000,
				// backspacing speed
            	backSpeed: -30,
                loop: true,
                contentType: 'html', // or text
                // defaults to false for infinite loop
                loopCount: false,
                callback: function(){ foo(); },
                resetCallback: function() { newTyped(); }
            });
    
            $(".reset").click(function(){
                $("#typed").typed('reset');
            });
    
        });
    
        function newTyped(){ /* A new typed object */ }
    
        function foo(){ console.log("Callback"); }
    
        </script>        
    </body>
</html>

				