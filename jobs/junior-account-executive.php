<?php
$title=" Junior Account Executive";
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
							
                                <p class="super-lead">Praytell is looking for a junior account executive to join our creative communications agency. We're 40+ strong in Brooklyn and beyond, with PRWeek Agency of the Year, Holmes Best New Agency and PRWeek Best Places to Work awards under our belt.</p>
                                
                                <p class="lead">We've got killer client partners, a pipeline that is ridiculous, culture you can’t beat and serious momentum. Seriously, if you’re into managing forward thinking clients and enjoy teams filled with smart and passionate people, this is the gig you’ve been waiting for, assuming you’re awesome, get social and want to change the world.</p>

								<p class="lead">To support our rapidly growing team, we’re looking to hire a junior account executive with 1-3 years of experience working at an agency or in-house. If you love talking to your clients, strategic thinking, big ideas, the full gamut (see below), we’d love to hear from you. If it sounds like a fit, send us an email that tells us why you're the right person to join us on this incredible journey (GIFs = bonus points). And like any good pitch, the subject line matters, big time.</p>

						</div>
					</div>
				</div>
			</section>	
            
	<section class="col-3-text">
				<div class="container">
                
                	<div class="row">
                    	<div class="col-md-8 col-md-offset-2 col-sm-12">
                        
                        <h3 class="color-accent">Role</h3>
                        <p>Junior Account Executive</p>
                        
                        <h3 class="color-accent">Time commitment</h3>
                        <p>Full Time, Start ASAP</p>
                        
                        <h3 class="color-accent">Location</h3>
                        <p>Brooklyn, NY</p>
                        
                        
<h3 class="color-accent">Responsibilities</h3>
                                
                                <ul class="bullets">
                                	<li>Daily account management supporting greater account teams</li>
                                	<li>Strong client relations and communications</li>
                                	<li>Ability to handle multiple partners and team members across an account</li>
                                	<li>Digital strategy and planning</li>
                                	<li>Participation in brainstorms and big idea development - we love creative, weird ideas</li>
                                	<li>Influencer relations experience</li>
                                	<li>Writing and editing (client presentations, reporting, POVs, etc.)</li>
                                	<li>Reading the news and staying current (-; Collaboration with PR, content and creative teams on integrated campaigns</li>
                                	<li>Event and partnership development and management</li>
                                </ul>
                                
								<h3 class="color-accent">Requirements</h3>
                                
                                <ul class="bullets">
                                	<li>1-3 years of experience at a digital or social agency or in-house with consumer brands</li>
                                	<li>Strong client relationship building and management skills</li>
                                	<li>Ability to offer strategic advice and recommendations that drive results</li>
                                	<li>Analytical knowhow</li>
                                	<li>Excellent writing and presentation skills</li>
                                	<li>Strong organization skills to manage multiple projects and client requests, etc.</li>
                                	<li>Idea machine, big and small</li>
                                	<li>Not afraid to pick up the phone and talk IRL to your client</li>
                                	<li>Positive attitude, willingness to contribute at all levels</li>
                                	<li>Strong level of integrity, autonomy and self-motivation</li>
                                	<li>Passion for greater good work</li>
                                    <li>Curious, eager to learn and enjoy a good happy hour once in awhile! </li>
                                </ul>

                                   <p class="lead">Be sure to check us out on <a href="https://www.facebook.com/praytellagency" target="_blank">Facebook</a> and <a href="https://www.twitter.com/praytellagency" target="_blank">Twitter</a>. Caution, it gets weird!</p>                             
                                                                
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
								<a class="btn btn-white btn-filled" href="mailto:jobs@praytellagency.com?subject=Junior Account Executive"><i class="icon icon_mail"></i>&nbsp; Apply Now</a>
							</div>
						</div>
				</div>
			</section>
            
            
            <!--------- INSTAGRAM FEED ------------>
			<section class="instagram-1 hidden-xs">
				<div class="instafeed" data-user-name="praytellagency">
					<ul></ul>
				</div>
			
				<!--<div class="container vertical-align">
					<div class="row">
						<div class="col-sm-12 text-center">
							<a href="#">
								<h2><i class="icon social_instagram"></i> Praytell-gram</h2><br>
								<span>It gets weird...</span>
							</a>
						</div>
					</div>
				</div>-->
			</section>
            
            
<?php 
   include($_SERVER['DOCUMENT_ROOT'] . "/includes/job-footer.php"); 
?>  
        
<script>
        $(function(){
    
            $("#typed").typed({
                strings: [ "Junior Account Executive"],
                typeSpeed: 2,
                backDelay: 2000,
				// backspacing speed
            	backSpeed: -30,
                loop: false,
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

				