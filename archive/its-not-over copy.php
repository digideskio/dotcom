
<?php
$title="It's Not Over";
$description="Praytell is a Brooklyn-based creative communications agency blending traditional PR with new school social and digital. An experienced team with media, design, and tech chops ready to shake things up.";
$breadcrumb="Case Study";
 ?>


<?php 
   include($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"); 
?>
					
            
            <!--------- DESKTOP VERSION ------------>
            
<section class="hero-project">
				<div class="background-image-holder">
					<img alt="Slide Background" class="background-image" src="../img/itsnotover-hero.jpg">
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
								How did we make Millennials take notice and take action around an epidemic that they’ve long since grown tired of hearing about?</h5>
                                
                               <p class="text-white"> We made a movie. We casted, produced and fully developed a feature-length documentary film called It’s Not Over for the MAC AIDS Fund. With a global launch on Netflix and SnagFilms during World AIDS Day 2014 - and backed by Rihanna and Miley Cyrus - the movie was directed by MTV fav Andrew Jenks and follows his trip through India, Indiana and South Africa to visit three people whose lives are impacted by HIV. 

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
									Praytell developed a yearlong campaign with multiple press pulses to support the film including a global teen survey, a live-streamed event with The Atlantic airing on Today.com, and a movie premiere event attended by Rihanna and Miley Cyrus. We distributed the film across 26 digital outlets, including Netflix and iTunes, and is now available in 14 different languages across 16 countries. Our media outreach resulted in 250+ unique placements and 110+ Million Impressions from outlets including Teen Vogue, WWD, E! News, People magazine, USA Today, The Today Show. 

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
									<img alt="Slide Background" class="background-image" src="../img/itsnotover-filming.jpg">
								</div>
							</li>
							
							<li>
								<div class="background-image-holder">
									<img alt="Slide Background" class="background-image" src="../img/itsnotover-premiere.jpg">
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
									It worked. The brand saw a 142% increase in conversations tying the MAC AIDS Fund to MAC Cosmetics, and double the number of overall VIVA GLAM references, with a big spike in sales to boot. With 200+ Media Placements and 110+ Million Impressions, we saw coverage about the film reached readers in the U.S., UK, France, Italy, Brazil, Mexico, Canada, Germany, The Netherlands, Korea and more. More? We won the 2015 Bulldog CSR PR Awards for Best Cause/Advocacy Campaign. Mission accomplished.
 	
								</p>
							</div>
						</div>
					</div>
				</div>
			
				<div class="image-holder embed-holder col-md-6 col-sm-4 pull-right">
					<iframe src="http://player.vimeo.com/video/128184972?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff"></iframe>
				</div>
			</section>
			
			<section class="action-strip-2">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<a href="../what-we-do.php#case-studies" class="btn inner-link">Back To Cases Studies</a>
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
                strings: ["It's Not Over","M·A·C Aids Fund"],
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
				