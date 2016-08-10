
<?php
$title="Barnes &amp; Noble";
$description="Praytell is a Brooklyn-based creative communications agency blending traditional PR with new school social and digital. An experienced team with media, design, and tech chops ready to shake things up.";
$breadcrumb="Case Study";
 ?>


<?php 
   include($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"); 
?>
					
            
            <!--------- DESKTOP VERSION ------------>
            
<section class="hero-project">
				<div class="background-image-holder">
					<img alt="Slide Background" class="background-image" src="../img/barnesnoble-hero.jpg">
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
								We Launched An Adult Coloring Movement</h5>
                                
                               <p class="text-white">To tap into the exploding trend of adult coloring and encourage in-store traffic at local Barnes & Nobles stores, we launched a nationwide program called, “The Barnes & Noble All-American Art Unwind,” inviting people to visit their local Barnes & Noble to relax and engage in adult coloring activities.  
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
									Executing a thoughtful influencer program engaging top artists in the adult coloring and illustration spaces, we created a public relations driven campaign promoting the All American Unwind in-store event at Barnes and Noble locations throughout the United States. Participants colored in pieces of famed coloring book artist’s Millie Marotta’s new book and submitted their coloring work via social to populate a digital mosaic hosted at <a href="http://BNArtUnwind.com" target="_blank">BNArtUnwind.com</a>.
 
 	
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
									<img alt="Slide Background" class="background-image" src="../img/barnesnoble-1.jpg">
								</div>
							</li>
							
							<li>
								<div class="background-image-holder">
									<img alt="Slide Background" class="background-image" src="../img/barnesnoble-3.jpg">
								</div>
							</li>
                            
							<li>
								<div class="background-image-holder">
									<img alt="Slide Background" class="background-image" src="../img/barnesnoble-2.jpg">
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
									The campaign garnered strong media exposure including 124 placements from national and top local market media with 118 million impressions. Notable placements included: 
								</p>
                                <ul>
                                	<li><strong>National</strong>: The New York Times, TIME magazine, Ad Age, Adweek, PBS Next Avenue, Examiner.com</li>
                                    <li><strong>Local:</strong> Chicago Tribune, Dallas Morning News, St Louis Post Dispatch, Detroit News, Atlanta Journal Constitution, Orlando Sentinel</li>
                                    <li><strong>Broadcast:</strong> CBS Miami, Chicago’s You & Me This Morning, CBS Atlanta, Good Day Sacramento, Long Island News</li>
                                </ul>
							</div>
						</div>
					</div>
				</div>
			
				<div class="image-holder col-md-6 col-sm-4 pull-left">
					<div class="image-slider">
						<ul class="slides">
							<li>
								<div class="background-image-holder">
									<img alt="Slide Background" class="background-image" src="../img/barnesnoble-5.jpg">
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
								<p>
									We also drove strong social engagement with over 800 user-generated Tweets featuring <span class="color">#BNArtUnwind</span>, 1,200 shares, 35,000 likes and over 1.4 million impressions. Barnes &amp; Noble also recorded an increase in sales in adult coloring books and supplies across its retail stores as a result of the campaign. Mission accomplished!
 	
								</p>
							</div>
						</div>
					</div>
				</div>
			
				<div class="image-holder embed-holder col-md-6 col-sm-4 pull-right">
					<iframe src="http://player.vimeo.com/video/148946414?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff"></iframe>
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
                strings: ["Barnes &amp; Noble", "All American Art Unwind"],
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
				