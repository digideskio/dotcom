<?php
$title="Sarah Chavey";
$description="Praytell is a Brooklyn-based creative communications agency blending traditional PR with new school social and digital. An experienced team with media, design, and tech chops ready to shake things up.";
$breadcrumb="Who We Are";
 ?>


<?php 
   include($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"); 
?>   

			<section class="image-block short-pad team-member">
		
				<div class="image-holder col-md-4 col-sm-4 pull-left">
					<div class="background-image-holder">
						<img alt="<?php echo $title ?> // Praytell" title="<?php echo $title ?> // Praytell" class="background-image" src="/img/team/sarah-hover.jpg">
					</div>
				</div>	
		
				<div class="container">
					<div class="row">
                    
						<div class="col-md-8 col-sm-8 col-md-offset-5 col-sm-offset-5">
                        <div class="row">
								<div class="team-member-title">
                                    <div class="detail-line"></div>
                                    <h5>Senior Strategist</h5>
                                        <h1 class="text"><span id="typed"></span></h1>
                                </div>
                    	</div>

						
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="narrow-feature">
									<i class="icon pe-7s-car"></i>
									<div class="content">
										<h1>8:1<sub></sub></h1>
										<p>numbers of dogs fostered to number of dogs that never left</p>
									</div>
								</div>
							</div>
						
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="narrow-feature">
									<i class="icon pe-7s-like"></i>
									<div class="content">
										<h1>6<sub>years</sub></h1>
										<p>in a row attending SXSW, equally due to the music and the BBQ</p>
									</div>
								</div>
							</div>
						
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="narrow-feature">
									<i class="icon ion-ios-monitor-outline"></i>
									<div class="content">
										<h1>200<sub></sub></h1>
										<p>personal record of Swedish meatballs made in one setting</p>
									</div>
								</div>
							</div>
                            
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="narrow-feature">
									<i class="icon pe-7s-medal"></i>
									<div class="content">
										<h1>2<sub></sub></h1>
										<p>half marathons completed</p>
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
							<a href="/who-we-are#praytell-crew" class="btn inner-link" alt="Back To The Praytell Crew" title="Back To The Praytell Crew"><i class="ion-arrow-left-a"></i> To The Praytell Crew</a>
						</div>
					</div>
				</div>
			</section>     
            
			<!--<section class="twitter-1">
				<div class="container">
					<div class="row">
						<div class="col-md-7 col-sm-9">
							<i class="icon ion-social-twitter-outline text-white"></i>
							<div class="twitter-feed">
								<div class="tweets-feed tweets-slider" data-widget-id="697903307872935936">
								</div>
							</div>
							<span class="text-white">Follow <a href="https://twitter.com/swchavey">@swchavey</a></span>
						</div>
					</div>
				</div>
			</section>-->
            
			
			<section class="instagram-1">
				<div class="instafeed" data-user-name="schavey">
					<ul></ul>
				</div>
			
				<div class="container vertical-align">
					<div class="row">
						<div class="col-sm-12 text-center">
							<a href="#">
								<h2 class="text-white"><i class="icon social_instagram"></i> @schavey</h2><br>
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
                strings: ["Sarah Chavey"],
                typeSpeed: 10,
                backDelay: 2000,
            	backSpeed: -30,
                loop: false,
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

				