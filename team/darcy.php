<?php
$title="Darcy Provo";
$description="Praytell is a Brooklyn-based creative communications agency blending traditional PR with new school social and digital. An experienced team with media, design, and tech chops ready to shake things up.";
$breadcrumb="Who We Are";
 ?>


<?php 
   include($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"); 
?>   

			<section class="image-block short-pad team-member">
		
				<div class="image-holder col-md-4 col-sm-4 pull-left">
					<div class="background-image-holder">
						<img alt="<?php echo $title ?> // Praytell" title="<?php echo $title ?> // Praytell" class="background-image" src="/img/team/darcy-hover.jpg">
					</div>
				</div>	
		
				<div class="container">
					<div class="row">
                    
						<div class="col-md-8 col-sm-8 col-md-offset-5 col-sm-offset-5">
                        <div class="row">
								<div class="team-member-title">
                                    <div class="detail-line"></div>
                                    <h5>Media Relations</h5>
                                        <h1 class="text"><span id="typed"></span></h1>
                                        
                                        <p>I'm a PR pro with a lot of experience (and successes!) under my belt providing strategic communications and media relations counsel to the founders, CEOs and CMOs of start-up and fast-growth technology companies. I got my start in tech PR in 1996 as a partner at San Francisco-based Antenna Group where for 12 years I led programs that not only put my clients on the map, but also helped shape the definition of Internet industry categories and phenomena. Prior to that, I spent 12 years in San Francisco’s broadcasting industry as a publicist for KPIX-TV and marketing director for KGO Newstalk 810. Since 2008, I've been an independent PR consultant with the good fortune to be able to work with brilliant and creative entrepreneurs to help them launch and/or grow their companies. I love it. A near-native of the San Francisco Bay Area, I earned my bachelor's degree in history from Stanford University.</p>
                                </div>
                    	</div>

						
							<!--<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="narrow-feature">
									<i class="icon ion-ios-location-outline"></i>
									<div class="content">
										<h1>X<sub></sub></h1>
										<p>Stat</p>
									</div>
								</div>
							</div>
						
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="narrow-feature">
									<i class="icon ion-ios-book-outline"></i>
									<div class="content">
										<h1>X<sub>x</sub></h1>
										<p>stat</p>
									</div>
								</div>
							</div>
						
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="narrow-feature">
									<i class="icon ion-ios-information-outline"></i>
									<div class="content">
										<h1>X<sub></sub></h1>
										<p>stat</p>
									</div>
								</div>
							</div>
                            
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="narrow-feature">
									<i class="icon ion-android-walk"></i>
									<div class="content">
										<h1>X<sub></sub></h1>
										<p>stat</p>
									</div>
								</div>
							</div>-->
                                                        
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
            
	
    
    <?php 
   include($_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php"); 
?> 

<script>
        $(function(){
    
            $("#typed").typed({
                strings: ["Darcy Provo"],
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

				