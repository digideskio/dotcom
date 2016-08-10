<?php
$title=" Designer";
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
							
                                <p class="super-lead">Praytell is looking for a skilled designer to support our leading creative team. Ideally you’re a passionate designer with all things creative on your mind - you’re curious about new design modalities, discovering smart, creative ways to create beautiful productions and you’ve got a colorful portfolio of your own. Praytell’s new design star will assist the team in developing fresh visual identities, killer pitch presentations, layouts for web editorial and social media content across our diverse array of clientele - and much, much more.</p>

								<p class="lead">A little about us. We're the fastest growing agency in Brooklyn with outposts in San Francisco, Austin, Chicago and LA. In addition to the stellar creative team, you’ll be working with seasoned agency professionals who’ve led some of the largest social brand campaigns out there and colleagues committed to mentorship and career development. In addition to being PR Week’s Best Place to Work two years running, we offer a flexible work environment with amazing people and a kitchen filled with all the best snacks (plus we have a sweet beer/food hall right below us). We also offer unlimited vacation (and mean it), an employee wellness program, and regularly donate our time supporting <a href="http://praytellagency.com/culture" target="_blank">greater good projects</a>.</p>
                                
                                <p>If you’re ready to design at a start­up with incredible clients, infectious energy and eyes on global domination (while still being decent and interesting people) then shoot us an email. Or a <a href="https://twitter.com/praytellagency" target="_blank">Tweet</a> with a customized GIF (we love GIFs). Up to you, just make it interesting.
</p>

						</div>
					</div>
				</div>
			</section>	
            
	<section class="col-3-text">
				<div class="container">
                
                	<div class="row">
                    	<div class="col-md-8 col-md-offset-2 col-sm-12">
                        
                        <h3 class="color-accent">Role</h3>
                        <p>Junior Copywriter</p>
                        
                        <h3 class="color-accent">Time commitment</h3>
                        <p>Full Time, start ASAP</p>
                        
                        
<h3 class="color-accent">Responsibilities</h3>
                                
                                <ul class="bullets">
                                	<li>Collaborate closely with creative and strategy teams to develop creative copy for social media and traditional marketing channels, including Facebook, Instagram, Twitter, videos, email, websites and more.</li>
                                    <li>Show strong grasp of language and demonstrate a keen ability to engage a diverse array of readers</li>                                    <li>Expert knowledge of trends and tools for paid social media platforms, self-serve</li>
                                    <li>Share visual ideas regularly to support copy and overall brand/campaign strategy</li>
                                    <li>Ensure flawless execution of work while following industry best-practices and provided guidelines</li>
                                    <li>Actively seek out and help define new creative possibilities for client engagements while ensuring consistency and adherence to brand standards</li>
                                    <li>Reports to Content Strategy Supervisor for direction on day-to-day priorities</li>
                                </ul>
                                
								<h3 class="color-accent">Requirements</h3>
                                
                                <ul class="bullets">
                                	<li>Ideally you’re fresh out of college with up to 3 years of professional working experience</li>
                                    <li>Agency experience a huge plus</li>
                                    <li>You’re curious, eager to learn and have an avid sense of humor</li>
                                    <li>Demonstrated experience writing clear, persuasive and original copy</li>
                                    <li>Ability to multitask and thrive in a fast-paced, dynamic environment</li>
                                    <li>Well versed in current media trends and the latest happenings on the social scene</li>
                                    <li>A passion for social media, communications and new media/technology</li>
                                    <li>Strong levels of integrity, autonomy, and self-motivation</li>
                                </ul>
                                
                                                                
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
								<a class="btn btn-white btn-filled" href="mailto:jobs@praytellagency.com?subject=Designer"><i class="icon icon_mail"></i>&nbsp; Apply Now</a>
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
                strings: [ "Designer", "Killer Designer"],
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

				