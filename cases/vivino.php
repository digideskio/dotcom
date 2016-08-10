
<?php
$title="Vivino";
$description="Praytell is a Brooklyn-based creative communications agency blending traditional PR with new school social and digital. An experienced team with media, design, and tech chops ready to shake things up.";
$breadcrumb="Case Study";
 ?>


<?php 
   include($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"); 
?>
					
            
            <!--------- DESKTOP VERSION ------------>
            
<section class="hero-project">
				<div class="background-image-holder">
					<img alt="Slide Background" class="background-image" src="../img/vivino-hero.jpg">
				</div>
			
				<div class="container">
					<div class="row">
						<div class="col-md-5 col-sm-7">
							<div class="text-block">
								<div class="detail-line"></div>
								<h5 class="text-white">Case Study</h5>
								<h1 class="text-white"><span id="typed"></span></h1>
							</div>
							
                                
                               <h5 class="text-white">How do we increase general awareness about the Vivino wine app among a mass consumer audience, and drive new downloads of the app?</h5>
                               <p class="text-white"> Our answer: tie Vivino--and specifically wine--to a major “moment” that affects consumers nationwide. In this case, Girl Scout Cookies which go on sale in the U.S. from late January through the end of February and capture the attention and hearts of Americans everywhere. We knew this would be a prime opportunity to showcase Vivino’s expertise and to play up how Vivino is all about making wine more accessible to all. Besides, who doesn’t love a good Thin Mint and Brunello? 
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
									Praytell proposed a Wine + Girl Scout Cookies pairing guide in the form of an infographic to be distributed right as Girl Scout Cookie sales were heating up. Vivino featured user Tracy Byrnes teamed with Jessica Norris, wine director at New York City’s Del Frisco’s Double Eagle Steakhouse and one of Wine Enthusiast’s Top 40 under 40 Tastemakers to develop specific wine recommendations for all 12 Girl Scout Cookies. The infographic and corresponding online content piece went live January 25 and within 48 hours was trending across Facebook and Twitter. We pushed the “news” out to national and regional broadcast outlets and a wide variety of lifestyle and news outlets, facilitating multiple interview requests. The media were hungry for more and specifically wanted to dig deeper into Vivino’s tasting notes and recommendations.
 
 	
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
									<img alt="Slide Background" class="background-image" src="../img/vivino-1.jpg">
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
									We far exceeded expectations, securing more than 170 online pieces including feature articles in national outlets like <em>Los Angeles Times, Marie Claire Magazine, Town &amp; Country Magazine, House Beautiful Magazine, Redbook, Elle Decor, InStyle, Yahoo!, Refinery29, Mother Nature Network, mental_floss, Gizmodo, Delish</em>, and countless others. We also produced a Vivino-first, securing a Good Morning America and TODAY Show hit on the same day within one hour of each other! Broadcast hits totaled more than 600+, reaching every major (and minor) market in the U.S. from New York City to Fort Smith, Arkansas. What’s more, Vivino was crushing it in the App Store, surpassing 14 million users within two weeks of the Girl Scouts pairing guide going live--that’s more than one-million new users in just 30 days!</p>
							</div>
						</div>
					</div>
				</div>
			
				<div class="image-holder col-md-6 col-sm-4 pull-left">
					<div class="image-slider">
						<ul class="slides">
							<li>
								<div class="background-image-holder">
									<img alt="Slide Background" class="background-image" src="../img/vivino-4.jpg">
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
                strings: ["Vivino","Vivino + Girl Scouts"],
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
				