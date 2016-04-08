
<?php
$title="Waze";
$description="Praytell is a Brooklyn-based creative communications agency blending traditional PR with new school social and digital. An experienced team with media, design, and tech chops ready to shake things up.";
$breadcrumb="Case Study";
 ?>


<?php 
   include($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"); 
?>
					
            
            <!--------- DESKTOP VERSION ------------>
            
<section class="hero-project">
				<div class="background-image-holder">
					<img alt="Slide Background" class="background-image" src="../img/waze-hero.jpg">
				</div>
			
				<div class="container">
					<div class="row">
						<div class="col-md-5 col-sm-7">
							<div class="text-block">
								<div class="detail-line"></div>
								<h5 class="text-white">Case Study</h5>
								<h1 class="text-white"><span id="typed"></span></h1>
							</div>
							<h5 class="text-white">
								Targeted Star Wars Influencer Campaign</h5>
                                
                               <p class="text-white">The world’s most used navigation app Waze, recently acquired by Alphabet, engaged Praytell to support the launch of a new in-app experience featuring C-3PO’s voice and related experiences in partnership with Star Wars to capitalize on the upcoming film. 

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
									To generate interest and drive downloads, Praytell developed an influencer program, engaging the world’s most influential Star Wars fans from @DepressedDarth to @YodasNews to create buzz and drive downloads during the six-week initiative. We armed influencers with customized toolkits featuring suggested content, creative and popular Star Wars-related incentives to engage their fans.  
 	
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
									<img alt="Slide Background" class="background-image" src="../img/waze-1.jpg">
								</div>
							</li>
							
							<li>
								<div class="background-image-holder">
									<img alt="Slide Background" class="background-image" src="../img/waze-2.jpg">
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
									In the first two weeks, our influencers created positive buzz about the Waze Star Wars experience via 77 organic posts with 5.1 million impressions, driving 3,120 retweets/shares, 4,150 likes and hundreds of fan comments. Influencers created a groundswell of excitement among Star Wars fans who shared their reactions from “excellent app, downloaded last night” to “I love how C-3PO calls me master” to “this is way too cool,” ultimately driving new downloads of the Waze app. With four more weeks to go, the campaign continues to build momentum and bring “The Force” to drivers everywhere.
 

								</p>
							</div>
						</div>
					</div>
				</div>
			
				<div class="image-holder col-md-6 col-sm-4 pull-left">
					<div class="image-slider">
						<ul class="slides">
							<li>
								<div class="background-image-holder">
									<img alt="Slide Background" class="background-image" src="../img/waze-3.jpg">
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
                strings: ["Waze"],
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
				