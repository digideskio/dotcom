<?php
$title="Alex Blynn";
$description="Praytell is a Brooklyn-based creative communications agency blending traditional PR with new school social and digital. An experienced team with media, design, and tech chops ready to shake things up.";
$breadcrumb="Who We Are";
 ?>


<?php 
   include($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"); 
?>   

			<section class="image-block short-pad team-member">
		
				<div class="image-holder col-md-4 col-sm-4 pull-left">
					<div class="background-image-holder">
						<img alt="<?php echo $title ?> // Praytell" title="<?php echo $title ?> // Praytell" class="background-image" src="../img/team/alexB-hover.png">
					</div>
				</div>
		
				<div class="container">
					<div class="row">
                    
						<div class="col-md-8 col-sm-8 col-md-offset-5 col-sm-offset-5">
                        <div class="row">
								<div class="team-member-title pad-bottom">
                                    <div class="detail-line"></div>
                                    <h5>PR Strategist</h5>
                                     <h1 class="text"><span id="typed"></span></h1>    
								</div>
                    	</div>
                            
                        

							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="narrow-feature">
									<i class="icon ion-heart"></i>
									<div class="content">
										<h1>7</h1>
										<p>nieces and nephews I have (possibly more in the near future)</p>
									</div>
								</div>
							</div>
						
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="narrow-feature">
									<i class="icon ion-social-octocat"></i>
									<div class="content">
										<h1>1</h1>
										<p>Siamese cat by the name of Sterling who probably calls me his servant</p>
                                        <p>&nbsp;</p>
									</div>
								</div>
							</div>
						
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="narrow-feature">
									<i class="icon ion-tshirt"></i>
									<div class="content">
										<h1>4</h1>
										<p>lint rollers I keep on hand for all the cat hair</p>
									</div>
								</div>
							</div>
						
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="narrow-feature">
									<i class="icon ion-bowtie"></i>
									<div class="content">
										<h1>90</h1>
										<p>percentage of my clothing that is black</p>
                                        <p>&nbsp;</p>
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
								<div class="tweets-feed tweets-slider" data-widget-id="730861667479896064">
								</div>
							</div>
							<span class="text-white">Follow <a href="https://www.twitter.com/AlexBlynn">@AlexBlynn</a></span>
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
                strings: ["Alex Blynn^6000", "Alexis Bledel"],
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

				