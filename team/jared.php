<?php
$title="Jared Paul";
$description="Praytell is a Brooklyn-based creative communications agency blending traditional PR with new school social and digital. An experienced team with media, design, and tech chops ready to shake things up.";
$breadcrumb="Who We Are";
 ?>


<?php 
   include($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"); 
?>   

			<section class="image-block short-pad team-member">
		
				<div class="image-holder col-md-4 col-sm-4 pull-left">
					<div class="background-image-holder">
						<img alt="<?php echo $title ?> // Praytell" title="<?php echo $title ?> // Praytell" class="background-image" src="/img/team/jared-hover.jpg">
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
									<i class="icon ion-ios-musical-notes"></i>
									<div class="content">
										<h1>157</h1>
										<p>number of Widespread Panic concerts I've been to</p>
									</div>
								</div>
							</div>
						
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="narrow-feature">
									<i class="icon ion-cash"></i>
									<div class="content">
										<h1>1</h1>
										<p>Number of professional poker players I've managed</p>
									</div>
								</div>
							</div>
						
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="narrow-feature">
									<i class="icon ion-happy"></i>
									<div class="content">
										<h1>6<sub>years</sub></h1>
										<p>In a row I've attended High Sierra Music Fest (a must-attend festival at least once)</p>
									</div>
								</div>
							</div>
                            
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="narrow-feature">
									<i class="icon ion-ios-eye-outline"></i>
									<div class="content">
										<h1>A $#!t<sub>ton</sub></h1>
										<p>number of <a href="https://www.youtube.com/watch?v=gcFDuMD0-k8" target="_blank">ducks</a> I once saw in India</p>
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
            
            
			
			<section class="instagram-1">
				<div class="instafeed" data-user-name="jpawsf">
					<ul></ul>
				</div>
			
				<div class="container vertical-align">
					<div class="row">
						<div class="col-sm-12 text-center">
							<a href="#">
								<h2 class="text-white"><i class="icon social_instagram"></i> @jpawsf</h2><br>
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
                strings: ["Jared Paul^6000", "JPAW", "J-Dog Smoothe", "Goat", "Goatman"],
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

				