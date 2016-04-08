<?php
$title="&#9971;  Andy Pray";
$description="Praytell is a Brooklyn-based creative communications agency blending traditional PR with new school social and digital. An experienced team with media, design, and tech chops ready to shake things up.";
$breadcrumb="Who We Are";
 ?>


<?php 
   include($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"); 
?>   

			<section class="image-block short-pad team-member">
		
				<div class="image-holder col-md-4 col-sm-4 pull-left">
					<div class="background-image-holder">
						<img alt="<?php echo $title ?> // Praytell" title="<?php echo $title ?> // Praytell" class="background-image" src="/img/team/andy-hover.jpg">
					</div>
				</div>
		
				<div class="container">
					<div class="row">
                    
						<div class="col-md-8 col-sm-8 col-md-offset-5 col-sm-offset-5">
                        <div class="row">
								<div class="team-member-title pad-bottom">
                                    <div class="detail-line"></div>
                                    <h5>Founder</h5>
                                        <h1 class="text"><span id="typed"></span></h1>
                                        
                                         <p class="lead">Andrew Pray has been leading integrated PR campaigns that cover social, digital and traditional PR for nearly a decade, experience that led to the start of Praytell in December of ‘12. Prior to founding Praytell, he worked with Ruder Finn (SF, NYC, London) and Waggener Edstrom (SF). He was named to PRWeek’s 40 under 40 list in 2015 as punishment for always thinking those lists were pretty silly.</p>
                                         
<p>Pray started his career as an on-air reporter for CBS television stations in NE and WY, also worked as a producer at KPIX, the CBS affiliate in San Francisco. Andy lives in Brooklyn where he is addicted to Minnesota sports, reading movie reviews on Thursday mornings and fecklessly waiting for the day that he can finish a Sunday Times crossword puzzle like his dad.</p>                                
								</div>
                    	</div>
                        

							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="narrow-feature">
									<i class="icon pe-7s-credit"></i>
									<div class="content">
										<h1>24<sub></sub></h1>
										<p>credit cards/keys/wallets <a href="https://instagram.com/p/41-hzFDez0/?taken-by=praytellstrategy" target="_blank">lost</a> since April 1, 2013</p>
									</div>
								</div>
							</div>
						
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="narrow-feature">
									<i class="icon pe-7s-wine"></i>
									<div class="content">
										<h1>8,475<sub>bottles</sub></h1>
										<p>of sauvignon blanc consumed (yearly)</p>
                                        <p>&nbsp;</p>
									</div>
								</div>
							</div>
						
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="narrow-feature">
									<i class="icon ion-ios-pulse"></i>
									<div class="content">
										<h1>3<sub>daily</sub></h1>
										<p>high kicks = the exercise regime of choice for startup founders</p>
									</div>
								</div>
							</div>
						
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="narrow-feature">
									<i class="icon pe-7s-attention"></i>
									<div class="content">
										<h1>4<sub></sub></h1>
										<p># of face rubs that signal critical cortisol levels</p>
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
								<div class="tweets-feed tweets-slider" data-widget-id="628304081141014528">
								</div>
							</div>
							<span class="text-white">Follow <a href="https://www.twitter.com/praytellny">@praytellNY</a> for more #FounderThoughts</span>
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
                strings: ["Andy Pray^6000", "OMP", ""],
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

				