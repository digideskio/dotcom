<?php
$title="Nestor Bailly";
$description="Praytell is a Brooklyn-based creative communications agency blending traditional PR with new school social and digital. An experienced team with media, design, and tech chops ready to shake things up.";
$breadcrumb="Who We Are";
 ?>
 
 <?php 
   include($_SERVER['DOCUMENT_ROOT'] . "/php/includes/header.php"); 
?> 				
            
            <!--------- DESKTOP VERSION ------------>
			<section class="image-block short-pad team-member">
		
				<div class="image-holder col-md-4 col-sm-4 pull-left">
					<div class="background-image-holder">
						<img alt="Nestor Bailly // Praytell" title="Nestor Bailly // Praytell" class="background-image" src="../img/team/nestor.jpg">
					</div>
				</div>
		
				<div class="container">
					<div class="row">
                    
						<div class="col-md-8 col-sm-8 col-md-offset-5 col-sm-offset-5">
                        <div class="row">
								<div class="team-member-title">
                                    <div class="detail-line"></div>
                                    <h5>Strategist</h5>
                                        <h1 class="text"><span id="typed"></span></h1>
                                </div>
                    	</div>

							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="narrow-feature">
									<i class="icon ton-so-equalizer-2"></i>
									<div class="content">
										<h1>11,618<sub>Ft</sub></h1>
										<p>climbed in one day</p>
									</div>
								</div>
							</div>
						
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="narrow-feature">
									<i class="icon ion-ribbon-a"></i>
									<div class="content">
										<h1>300<sub>Hrs</sub></h1>
										<p>played of Kerbal Space Program</p>
									</div>
								</div>
							</div>
						
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="narrow-feature">
									<i class="icon ion-ios-body-outline"></i>
									<div class="content">
										<h1>120<sub>Streets</sub></h1>
										<p>above Houston was where he was born</p>
									</div>
								</div>
							</div>
						
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="narrow-feature">
									<i class="icon ton-so-bagel"></i>
									<div class="content">
										<h1>0<sub></sub></h1>
										<p>Dank memes invented</p>
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
							<a href="../who-we-are.php#praytell-crew" class="btn inner-link"  alt="Back To The Praytell Crew" title="Back To The Praytell Crew"><i class="ion-arrow-left-a"></i> To The Praytell Crew</a>
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
								<div class="tweets-feed tweets-slider" data-widget-id="603669126058508288">
								</div>
							</div>
							<span class="text-white">Follow <a href="https://twitter.com/nkbailly">@nkbailly</a></span>
						</div>
					</div>
				</div>
			</section>
            
			
			<section class="instagram-1">
				<div class="instafeed" data-user-name="nkbailly">
					<ul></ul>
				</div>
			
				<div class="container vertical-align">
					<div class="row">
						<div class="col-sm-12 text-center">
							<a href="#">
								<h2 class="text-white"><i class="icon social_instagram"></i> @nkbailly</h2><br>
								<span class="text-white">Gaming, biking and content-ing</span>
							</a>
						</div>
					</div>
				</div>
			</section>
            
            
<?php 
   include($_SERVER['DOCUMENT_ROOT'] . "/php/includes/footer.php"); 
?>  

		<script>
        $(function(){
    
            $("#typed").typed({
                strings: ["Nestor Bailly^6000", "Nestron", "Game on"],
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

				