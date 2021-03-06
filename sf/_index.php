<?php
$title="Creative Communications";
$description="Praytell is a Brooklyn-based creative communications agency blending traditional PR with new school social and digital. An experienced team with media, design, and tech chops ready to shake things up.";
$breadcrumb="";
 ?>


<?php 
   include($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"); 
?>  



			<section class="hero-slider large-image">
				<ul class="slides">
					<li>
						<div class="background-image-holder">
							<img alt="Slide Background" class="background-image" src="#">
						</div>
					
						<div class="video-holder video-wrapper">
                            
                        <video autoplay muted loop>
                            <source src="video/shark.mp4" type="video/mp4" />
                            <source src="video/shark.webm" type="video/webm" />
                            Video not supported.
                        </video>	
                    		
						</div>	
			
						<div class="container vertical-align">
							<div class="row">
								<div class="col-sm-12 text-center">
									<h1 class="text-white white-space:pre;"><span id="typed"></span></h1>
								</div>
							</div>
						</div><!--end of container-->	
					</li>
                
					
                    
				</ul>
			</section>
			
			<section class="no-pad hidden-xs">
				<div class="col-sm-4">
					<div class="image-tile">
						<div class="background-image-holder overlay">
							<img alt="Slide Background" class="background-image" src="img/home_whoweare.jpg">
						</div>
						<div class="content">
							<a href="who-we-are.html">
								<h2 class="text-white">The Crew</h2>
                                <p class="text-white">Meet The Family</p>
							</a>
						</div>
					</div>
				</div>
			
				<div class="col-sm-4">
					<div class="image-tile">
						<div class="background-image-holder overlay">
							<img alt="Slide Background" class="background-image" src="img/home_whatwedo.jpg">
						</div>
						<div class="content">
							<a href="what-we-do.html">
								<h2 class="text-white">What We Do</h2>
                                <p class="text-white">Our Services &amp; Case Studies</p>
							</a>
						</div>
					</div>
				</div>
			
				<div class="col-sm-4 image-tile-wrapper">
					<div class="image-tile">
						<div class="background-image-holder overlay">
							<img alt="Slide Background" class="background-image" src="img/home_news.jpg">
						</div>
						<div class="content">
							<a href="newsroom.html">
								<h2 class="text-white">Newsroom</h2>
                                <p class="text-white">The Latest Praytell News</p>
							</a>
						</div>
					</div>
				</div>
			</section>
			
<section class="title-text-divider">
		
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 text-center">
							<h1 class="move-up">Do The Right Thing.</h1>
							<h4>We don’t have a fancy set of core values, just four simple words to live by and to strive for.</h4>
                            <p class="lead">Our client and vendor partners can be assured that we’ll do the right thing. It’s an ethos that extends to our Passion Project, the way we treat each other internally, and the way we live outside the office.</p>
					</div>
				</div>
			</div>
			</section>
			
			<section class="no-pad">
				<div class="col-md-6 feature-box">
					<div class="background-image-holder">
						<img alt="Slide Background" class="background-image" src="img/home_radiator.jpg">
					</div>
				
					<div class="content">
						<h2 class="text-white">Radiator</h2>
						<p class="text-white">It’s our literary journal featuring the work of some of Brooklyn and NYC’s best writers. It’s a decidedly analog exercise in this 140 character obsessed world, and we couldn’t be more excited.<br>&nbsp;</p>
						<a class="btn btn-white btn-sm" href="#">Learn More</a>
                         
					</div>
				</div>
			
				<div class="col-md-6 feature-box">
					<div class="background-image-holder">
						<img alt="Slide Background" class="background-image" src="img/home_passionproject.jpg">
					</div>
				
					<div class="content">
                    	<h2 class="text-white">Passion Project</h2>
						<p class="text-white">We're giving away services for free to causes we care about. We want to help nonprofits that have an incredible story to tell but could use a little help from friends. We think it’s important. And, we’re just getting started. </p>
                       
						<a class="btn btn-white btn-sm" href="passion/">Learn More</a>
					</div>
				</div>
			</section>
			
            <!--------- TWITTER FEED ------------>
			<section class="twitter-2 hidden-xs">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 col-sm-12 text-center">
							<i class="icon ion-social-twitter-outline"></i>
							<div class="twitter-feed">
								<div class="tweets-feed tweets-slider" data-widget-id="595585640454090752">
							
								</div>
							</div>
							<span>Follow <a href="https://www.twitter.com/praytellAgency">@PraytellAgency</a> for more updates</span>
						</div>
					</div>
				</div>
			</section>
			
            <!--------- INSTAGRAM FEED ------------>
			<section class="instagram-1 hidden-xs">
				<div class="instafeed" data-user-name="praytellstrategy">
					<ul></ul>
				</div>
			
				<div class="container vertical-align">
					<div class="row">
						<div class="col-sm-12 text-center">
							<a href="#">
								<h2><i class="icon social_instagram"></i> Praytell-gram</h2><br>
								<span>It gets weird...</span>
							</a>
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
                strings: [ "We're a PR agency that gets social.", "We're a social agency that&nbsp;gets PR.", "We're a creative agency that gets PR and social.", "We just get it.", "Onwards.", "Upwards.^4000"],
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