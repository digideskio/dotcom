<?php
$title="Beth Cleveland";
$description="Praytell is a Brooklyn-based creative communications agency blending traditional PR with new school social and digital. An experienced team with media, design, and tech chops ready to shake things up.";
$breadcrumb="Who We Are";
 ?>


<?php 
   include($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"); 
?>   

			<section class="image-block short-pad team-member">
		
				<div class="image-holder col-md-4 col-sm-4 pull-left">
					<div class="background-image-holder">
						<img alt="<?php echo $title ?> // Praytell" title="<?php echo $title ?> // Praytell" class="background-image" src="/img/team/beth-hover.jpg">
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
                                        
                                         <p class="lead">Beth heads up Praytell’s public relations business with experience leading US and international programs for a range of clients including OfficeMax, MAC Cosmetics, Estee Lauder, Shock Top and Logitech. Her campaigns have leveraged evolving media platforms from Netflix to the first-ever live blogger webcast and earned awards from South by Southwest, PROMO Interactive, MIXX Awards and The Bulldog Awards.</p>
                                         
<p>Earlier in her career, she supported tech and consumer brands at Antenna Group and Ogilvy Public Relations Worldwide and managed PR and marketing internally for Fender (somehow wiggling her way into helping design a new guitar line). Beth holds an honors degree in journalism and mass communications and minor in fashion from the University of Colorado at Boulder.</p>                                
								</div>
                    	</div>
                        

							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="narrow-feature">
									<i class="icon pe-7s-smile"></i>
									<div class="content">
										<h1>30<sub></sub></h1>
										<p>semi-sweet chocolate chips consumed daily</p>
									</div>
								</div>
							</div>
						
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="narrow-feature">
									<i class="icon pe-7s-mouse"></i>
									<div class="content">
										<h1>9<sub>hrs</sub></h1>
										<p>record set for not leaving my desk for water, food, girl's room....and I still love being in PR</p>
									</div>
								</div>
							</div>
						
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="narrow-feature">
									<i class="icon pe-7s-world"></i>
									<div class="content">
										<h1>24<sub>countries</sub></h1>
										<p>I've visited and counting with the Swiss Alps, Ambergris Caye and Ljubljana, Slovenia topping my list!</p>
									</div>
								</div>
							</div>
						
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="narrow-feature">
									<i class="icon pe-7s-like"></i>
									<div class="content">
										<h1>2<sub></sub></h1>
										<p>adorable little kiddos who say the funniest things</p>
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
								<div class="tweets-feed tweets-slider" data-widget-id="628317394004525056">
								</div>
							</div>
							<span class="text-white">Follow <a href="https://www.twitter.com/PR_Beth">@PR_Beth</a></span>
						</div>
					</div>
				</div>
			</section>
            
			<!--<section class="instagram-1">
				<div class="instafeed" data-user-name="bethcleve">
					<ul></ul>
				</div>
			
				<div class="container vertical-align">
					<div class="row">
						<div class="col-sm-12 text-center">
							<a href="#">
								<h2 class="text-white"><i class="icon social_instagram"></i> @bethcleve</h2><br>
							</a>
						</div>
					</div>
				</div>
			</section>-->
	
    
    <?php 
   include($_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php"); 
?> 

<script>
        $(function(){
    
            $("#typed").typed({
                strings: ["Beth Cleveland^6000", "B^5000"],
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

				