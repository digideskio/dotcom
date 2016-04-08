<?php
$title=" Social Media Strategy Intern";
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
                                    <h3 class="text-white">Praytell San Francisco</h3>
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
							
                                <p class="super-lead">Do you love YouTube stars? Are you crazy about Vine video creators? Did you pre-order Tyler Oakley’s new book? Do you obsess about Jenna Marbles and have you been super pumped to go VidCon? Do you know what MCNs are?</p>

								<p class="lead">If you said yes to these questions, Praytell is looking for you! And, this may just be the best internship ever. At least we hope so. Here goes:</p>
                                
                                <p>A little about us. We're one the fastest growing agencies in the US, headquartered in Brooklyn with outposts in San Francisco, Austin, Chicago and LA (you’ll be joining the San Francisco team). You’ll be working with seasoned agency professionals who’ve led some of the largest social brand campaigns out there as well as colleagues committed to mentorship and career development. In addition to being PR Week’s Best Place to Work two years running, we offer a flexible work environment with amazing people and a kitchen filled with all the best snacks.</p>
						</div>
					</div>
				</div>
			</section>	
            
	<section class="col-3-text">
				<div class="container">
                
                	<div class="row">
                    	<div class="col-md-8 col-md-offset-2 col-sm-12">
                        
                        <!--<h3 class="color-accent">Role</h3>
                        <p>Social Media / PR Intern</p>-->
                        
                        <!--<h3 class="color-accent">Time commitment</h3>
                        <p>Full Time, start ASAP</p>-->
                        
                        
                        <h3 class="color-accent">You are</h3>
                                
                                <ul class="bullets">
                                	<li>An avid YouTube watcher and social media user.</li>
                                	<li>Know the ins and outs of videos on social and the top Digital/Video Creators like the back of your hand.</li>
                                	<li>Keeping tabs on who is hot or not and up and coming in the Digital/Video Creator space.</li>
                                	<li>A smart, self-driven, critical thinker who understands marketing and brand strategy basics, preferably with a background in Communications or PR.</li>
                                </ul>
                                
								<h3 class="color-accent">Qualifications</h3>
                                
                                <ul class="bullets">
                                	<li>Must be a Junior or Senior in college or a recent graduate.</li>
                                	<li>Have experience or the desire to learn how to curate compelling and interesting video content.</li>
                                	<li>Able to craft copy to highlight and showcase said content.</li>
                                	<li>Be able to identify and monitor the ongoings of top Digital/Video Creators in the YouTube/Vine/Snapchat/Twitter world.</li>
                                	<li>Be up to date on new apps like YouNow and Musical.ly, other spaces where the hottest Digital/Video Creators live and play.</li>
                                	<li>Must be familiar with Twitter and have an active account.</li>
                                	<li>Must understand how to follow “trending” hashtags on Twitter.</li>
                                	<li>Have the ability to listen to and follow directions from lead strategists.</li>
                                	<li>A personality that thrives with a somewhat schizophrenic culture that is sometimes super low-key start-up, sometimes surprisingly formal and buttoned up affair.</li>
                                	<li>Strong knowledge of popular culture and obsessive attention to detail.</li>
                                	<li>Exceptional written and oral communications skills with understanding of AP Style.</li>
                                	<li>Interest in helping to develop consumer facing social media content.</li>
                                	<li>Ability to work independently and prioritize tasks to meet stated deadlines.</li>
                                	<li>Live in or around the Bay Area and have the ability to come into our office in downtown SF at least 1-2 times during the week is a huge plus.</li>
                                </ul>
                                
                                
                                <p class="lead">If you’re ready to geek out on Digital/Video Creators, watch and track the most popular videos online, and regularly use Twitter at a start­up with incredible clients, infectious energy and eyes on global domination (while still being decent and interesting people) then shoot us an email. Or a Tweet. </p>
                                
                        
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
								<a class="btn btn-white btn-filled" href="mailto:jobs@praytellagency.com?subject=Social Media Strategy Intern"><i class="icon icon_mail"></i>&nbsp; Apply Now</a>
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
                strings: [ "Social Media Strategy Intern", "Focused on Internet Videos"],
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

				