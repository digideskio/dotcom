
<?php
$title="Kobalt";
$description="Praytell is a Brooklyn-based creative communications agency blending traditional PR with new school social and digital. An experienced team with media, design, and tech chops ready to shake things up.";
$breadcrumb="Case Study";
 ?>


<?php 
   include($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"); 
?>
					
            
            <!--------- DESKTOP VERSION ------------>
            
<section class="hero-project">
				<div class="background-image-holder">
					<img alt="Slide Background" class="background-image" src="../img/kobalt-hero.jpg">
				</div>
			
				<div class="container">
					<div class="row">
						<div class="col-md-5 col-sm-7">
							<div class="text-block">
								<div class="detail-line"></div>
								<h5 class="">Case Study</h5>
								<h1 class=""><span id="typed"></span></h1>
							</div>
							<h5 class="">
								We recently turned up the volume with Kobalt – the world’s fastest growing music publisher – as Google Ventures announced a Series C round of funding that made headlines around the world.</h5>
                                
                               <p class="">The round of funding led to the acquisition of the American Mechanical Rights Agency, now the American Music Rights Association, broadening Kobalt’s collection technology across the globe for AMRA members. 

							</p>
						</div>
					</div>
				</div>
			
			</section>
            
			
			<section class="image-block">
				<div class="container">
					<div class="row">
						<div class="col-md-5 col-sm-7 col-md-offset-7 col-sm-offset-5">
							<div class="text-block">
								<div class="detail-line"></div>
								<h5>The Process</h5>
								<p>
									We booked briefings with every major tech and business outlet from <em>The New York Times</em> and <em>Wall Street Journal</em> to <em>Los Angeles Times</em>, <em>TechCrunch</em>, <em>Business Insider</em>, <em>VentureBeat</em>, <em>Financial Times</em>, <em>IBT</em> and more. We worked closely with Kobalt founder and CEO Willard Ahdritz in a series of media training sessions and collaborated with Google Ventures to ensure message alignment. When the story broke of the funding and acquisition of AMRA, the news was heard worldwide, garnering more than 120 unique articles on major outlets with 200+ million media impressions. 
 

								</p>
							</div>
						</div>
					</div>
				</div>
			
				<div class="image-holder col-md-6 col-sm-4 pull-left">
					<div class="image-slider">
						<ul class="slides">
							<li>
								<div class="background-image-holder">
									<img alt="Slide Background" class="background-image" src="../img/kobalt-1.jpg">
								</div>
							</li>
							
						</ul>
					</div>
				</div>
			
			</section>
			
			<section class="image-block">
				<div class="container">
					<div class="row">
						<div class="col-md-5 col-sm-7">
							<div class="text-block">
								<div class="detail-line"></div>
								<h5>The Result</h5>
								<p>
									The momentum continues with Kobalt recently on the cover of WIRED Magazine and an extensive feature in the New York Times. As any good PR team knows, it’s hard work making it look this easy. 
 	
								</p>
							</div>
						</div>
					</div>
				</div>
			
				<div class="image-holder embed-holder col-md-6 col-sm-4 pull-right">
					<div class="image-slider">
						<ul class="slides">
							<li>
								<div class="background-image-holder">
									<img alt="Slide Background" class="background-image" src="../img/kobalt-2.jpg">
								</div>
							</li>
							
						</ul>
					</div>
				</div>
			</section>
			
			<section class="action-strip-2">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<a href="/what-we-do#case-studies" class="btn inner-link">Back To Case Studies</a>
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
                strings: ["Kobalt"],
                typeSpeed: 15,
                backDelay: 2500,
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
				