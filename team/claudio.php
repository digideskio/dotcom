<?php
$title="Claudio Taratuta";
$description="Praytell is a Brooklyn-based creative communications agency blending traditional PR with new school social and digital. An experienced team with media, design, and tech chops ready to shake things up.";
$breadcrumb="Who We Are";
 ?>


<?php 
   include($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"); 
?>   

			<section class="image-block short-pad team-member">
		
				<div class="image-holder col-md-4 col-sm-4 pull-left">
					<div class="background-image-holder">
						<img alt="<?php echo $title ?> // Praytell" title="<?php echo $title ?> // Praytell" class="background-image" src="/img/team/claudio-hover.jpg">
					</div>
				</div>
		
				<div class="container">
					<div class="row">
                    
						<div class="col-md-8 col-sm-8 col-md-offset-5 col-sm-offset-5">
                        <div class="row">
								<div class="team-member-title pad-bottom">
                                    <div class="detail-line"></div>
                                    <h5>Managing Partner</h5>
                                        <h1 class="text"><span id="typed"></span></h1>
                                        
                                         <p class="lead">Claudio oversees the social strategy and account teams at Praytell, providing strategic insights and leading campaigns for clients including Logitech, Soundcloud, Hyatt, TransferWise and more. Whether it’s content development, community management, measurement, or social listening, he makes sure it all gets done and done well.</p>
                                         
<p>Prior to Praytell, Claudio worked at 360i leading the charge on Oreo and its Daily Twist campaign.  The program won various awards such as a Webby, Facebook Studio Award, ANDY, CLIO and others.  Beyond loving tech and cookies, Claudio worked on accounts such as Wendy’s, Mountain Dew, Tanqueray and Verizon Wireless. He lives in Brooklyn with his wife, loving the New York Rangers and commuting to work on his bike a massive 8 miles a day.</p>                                
								</div>
                    	</div>
                        

							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="narrow-feature">
									<i class="icon ion-ios-paw-outline"></i>
									<div class="content">
										<h1>0<sub></sub></h1>
										<p>number of pets</p>
									</div>
								</div>
							</div>
						
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="narrow-feature">
									<i class="icon pe-7s-bicycle"></i>
									<div class="content">
										<h1>8<sub>miles</sub></h1>
										<p>biked each day to and from work</p>
                                        <p>&nbsp;</p>
									</div>
								</div>
							</div>
						
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="narrow-feature">
									<i class="icon pe-7s-map-marker"></i>
									<div class="content">
										<h1>4<sub>years</sub></h1>
										<p>of being a permanent resident of brooklyn</p>
									</div>
								</div>
							</div>
						
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="narrow-feature">
									<i class="icon pe-7s-like2"></i>
									<div class="content">
										<h1>1<sub></sub></h1>
										<p>number of meetings before <a href="/team/andy">Andy Pray</a> offered me a job</p>
									</div>
								</div>
							</div>
                                                        
						</div>
					
					</div>
                    
                    
				</div>
			
			</section>
            
			<section class="action-strip-2">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<a href="/who-we-are#praytell-crew" class="btn inner-link"  alt="Back To The Praytell Crew" title="Back To The Praytell Crew"><i class="ion-arrow-left-a"></i> To The Praytell Crew</a>
						</div>
					</div>
				</div>
			</section>     
            
                   
			<section class="twitter-1">
				<div class="container">
					<div class="row">
						<div class="col-md-7 col-sm-9">
							<i class="icon ion-social-twitter-outline text-white"></i>
							<div class="twitter-feed">
								<div class="tweets-feed tweets-slider" data-widget-id="628319953347870720">
								</div>
							</div>
							<span class="text-white">Follow <a href="https://www.twitter.com/ctaratuta">@ctaratuta</a></span>
						</div>
					</div>
				</div>
			</section>
            
			<section class="instagram-1">
				<div class="instafeed" data-user-name="ctaratuta">
					<ul></ul>
				</div>
			
				<div class="container vertical-align">
					<div class="row">
						<div class="col-sm-12 text-center">
							<a href="#">
								<h2 class="text-white"><i class="icon social_instagram"></i> @ctaratuta</h2><br>
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
                strings: ["Claudio Taratuta^6000", "C-Doggs", "Hey Gurl"],
                typeSpeed: 10,
                backDelay: 2000,
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

				