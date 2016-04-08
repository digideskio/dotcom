
<?php
$title="&#127864; Make Vegas Yours";
$description="Praytell is a Brooklyn-based creative communications agency blending traditional PR with new school social and digital. An experienced team with media, design, and tech chops ready to shake things up.";
$breadcrumb="Case Study";
 ?>


<?php 
   include($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"); 
?>
					
            
            <!--------- DESKTOP VERSION ------------>
            
<section class="hero-project">
				<div class="background-image-holder">
					<img alt="Slide Background" class="background-image" src="../img/makevegasyours-hero.jpg">
				</div>
			
				<div class="container">
					<div class="row">
						<div class="col-md-5 col-sm-7">
							<div class="text-block">
								<div class="detail-line"></div>
								<h5 class="">Case Study</h5>
								<h1 class=""><span id="typed"></span></h1>
							</div>
							<h5 class="">
								We were tasked with establishing Hyatt as a Vegas destination.</h5>
                                
                               <p class="">We needed to increase awareness of their Gold Passport and M life rewards - an exciting brand partnership between Hyatt and MGM - by seamlessly integrating promotional content amidst breathtaking editorial. That’s when Make Vegas Yours was born. 

							</p>
						</div>
					</div>
				</div>
			
			</section>
            
			
			<section class="image-block">
				<div class="container">
					<div class="row">
						<div class="col-md-5 col-sm-7 col-md-offset-7 col-sm-offset-5">
							<div class="text-block">
								<div class="detail-line"></div>
								<h5>The Process</h5>
								<p>
									Combining a responsive content hub site hosting real-time updates with an array of colorful user-generated images, videos and social posts, Make Vegas Yours gained 150k site visits out of the gate. Unique giveaway promotions helped engage fans as each one utilized unique copy, supporting social copy and corresponding imagery along with custom video content and fresh editorial calendars intermixing authentic POVs on the M life and HGP relationship. 
 

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
									<img alt="Slide Background" class="background-image" src="../img/makevegasyours-1.jpg">
								</div>
							</li>
							
						</ul>
					</div>
				</div>
			
			</section>
			
			<section class="image-block">
				<div class="container">
					<div class="row">
						<div class="col-md-5 col-sm-7">
							<div class="text-block">
								<div class="detail-line"></div>
								<h5>The Result</h5>
								<p>
									Needless to say, with content this engaging, users can’t help but visit the site again and again and share content across social channels for the chance to redeem Hyatt Gold Passport rewards points at some of MGM’s most sought after Vegas resorts and vice versa. Robust SEO, thoughtful social media strategy and highly targeted paid promotion are key drivers behind this campaign’s success. 
 	
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
									<img alt="Slide Background" class="background-image" src="../img/makevegasyours-2.jpg">
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
                strings: ["Make Vegas Yours","Hyatt Gold Passport"],
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
				