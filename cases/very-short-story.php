
<?php
$title="Very Short Story";
$description="Praytell is a Brooklyn-based creative communications agency blending traditional PR with new school social and digital. An experienced team with media, design, and tech chops ready to shake things up.";
$breadcrumb="Case Study";
 ?>


<?php 
   include($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"); 
?>
					
            
            <!--------- DESKTOP VERSION ------------>
            
<section class="hero-project">
				<div class="background-image-holder">
					<img alt="Slide Background" class="background-image" src="../img/veryshortstory-hero.jpg">
				</div>
			
				<div class="container">
					<div class="row">
						<div class="col-md-5 col-sm-7">
							<div class="text-block">
								<div class="detail-line"></div>
								<h5 class="text-white">Case Study</h5>
								<h1 class="text-white"><span id="typed"></span></h1>
							</div>
							
                                
                               <h5 class="text-white">How do we promote a classic Logitech product while reaching a key audience (the Creation Generation)?</h5>
                               <p class="text-white"> Our answer: partner with influencers to gain credibility in a creative space and promote the brand to engage fans in an exciting new way. 
							</p>
						</div>
					</div>
				</div>
			
			</section>
            
			<section class="image-block">
				<div class="container">
					<div class="row">
						<div class="col-md-5 col-sm-7">
							<div class="text-block">
								<div class="detail-line"></div>
								<h5>The Process</h5>
								<p>
									With the Very Short Story Challenge, Praytell developed a campaign asking fans to submit Twitter fiction using #LogiVSS. To engage a diverse audience and amplify campaign reach, we leveraged influencer partnerships with leaders in Twitter fiction and literature as well as Blurb.com, an online publishing house, to serve as advisors, judges, and promotional partners.
 
 	
								</p>
							</div>
						</div>
					</div>
				</div>
			
				<div class="image-holder embed-holder col-md-6 col-sm-4 pull-right">
					<div class="image-slider">
						<ul class="slides">
							<li>
								<div class="background-image-holder">
									<img alt="Slide Background" class="background-image" src="../img/veryshortstory-1.jpg">
								</div>
							</li>
							<li>
								<div class="background-image-holder">
									<img alt="Slide Background" class="background-image" src="../img/vivino-2.jpg">
								</div>
							</li>
                            
							<li>
								<div class="background-image-holder">
									<img alt="Slide Background" class="background-image" src="../img/vivino-3.jpg">
								</div>
							</li>
						</ul>
					</div>
				</div>
			</section>
			
			<section class="image-block">
				<div class="container">
					<div class="row">
						<div class="col-md-5 col-sm-7 col-md-offset-7 col-sm-offset-5">
							<div class="text-block">
								<div class="detail-line"></div>
								<h5>The Result</h5>
								<p>
									The program ran for 8 days and received a total of 509 story submissions, 1,980 unique hashtag mentions and 21,202 total engagements. With an ad budget of $6,000 across 8 tweets, the promotion had a 4.64% engagement rate, significantly higher than the Twitter average of 1%-3%. Fans were hungry to submit - many fans submitted even after the close date, contributing multiple stories and passing the word on to their friends. Given the success of the concept and it’s focus on the creative audience the brand aims to engage, #LogiVSS continues as a turnkey series that can be recreated seasonally or in line with different genres such as mystery, action or romance.</p>
							</div>
						</div>
					</div>
				</div>
			
				<div class="image-holder col-md-6 col-sm-4 pull-left">
					<div class="image-slider">
						<ul class="slides">
							<li>
								<div class="background-image-holder">
									<img alt="Slide Background" class="background-image" src="../img/veryshortstory-2.jpg">
								</div>
							</li>
							
						</ul>
					</div>
				</div>
			
			</section>
			
			
			<section class="action-strip-2">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<a href="/what-we-do#case-studies" class="btn inner-link">Back To Case Studies</a>
						</div>
					</div>
				</div>
			</section>            
			
      
		
		
				
<?php 
   include($_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php"); 
?>



<script>
        $(function(){
    
            $("#typed").typed({
                strings: ["Logitech","Very Short Story"],
                typeSpeed: 15,
                backDelay: 2500,
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
				