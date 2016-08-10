<?php
$title="Marisa Bettencourt";
$description="Praytell is a Brooklyn-based creative communications agency blending traditional PR with new school social and digital. An experienced team with media, design, and tech chops ready to shake things up.";
$breadcrumb="Who We Are";
 ?>


<?php 
    include($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"); 
?>   

			<section class="image-block short-pad team-member">
		
				<div class="image-holder col-md-4 col-sm-4 pull-left">
					<div class="background-image-holder">
						<img alt="<?php echo $title ?> // Praytell" title="<?php echo $title ?> // Praytell" class="background-image" src="/img/team/Marisa-hover.jpg">
					</div>
				</div>
		
				<div class="container">
					<div class="row">
                    
						<div class="col-md-8 col-sm-8 col-md-offset-5 col-sm-offset-5">
                        <div class="row">
								<div class="team-member-title pad-bottom">
                                    <div class="detail-line"></div>
                                    <h5>Senior Media Strategist</h5>
                                        <h1 class="text"><span id="typed"></span></h1>    
								</div>
                    	</div>
                        

							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="narrow-feature">
									<i class="icon ion-ios-paw"></i>
									<div class="content">
										<h1>37<sub>%</sub></h1>
										<p>percentage of my Instagram profile that is consumed by photos of cute animals</p>
									</div>
								</div>
							</div>
						
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="narrow-feature">
									<i class="icon pe-7s-car"></i>
									<div class="content">
										<h1>0</h1>
										<p>number of speeding tickets I've received.<br>&nbsp;</br><br>&nbsp;</br></p>
									</div>
								</div>
							</div>
						
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="narrow-feature">
									<i class="pe-7s-anchor"></i>
									<div class="content">
										<h1>1</h1>
										<p>number of times I've been stranded on a boat in the open oceans</p>
									</div>
								</div>
							</div>
						
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="narrow-feature">
									<i class="icon ion-ios-nutrition-outline"></i>
									<div class="content">
										<h1>11</h1>
										<p>Number of years I've been vegetarian and number of years my family has begged me to "just try a litte chicken this time!"</p>
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
								<div class="tweets-feed tweets-slider" data-widget-id="738125340598472704">
								</div>
							</div>
							<span class="text-white">Follow <a href="https://www.twitter.com/marisabett">@marisabett</a></span>
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
                strings: ["Marisa Bettencourt^6000", "Mouse", "Ris"],
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

				