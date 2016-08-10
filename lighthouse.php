<?php
$title="Lighthouse";
$description="Praytell is a Brooklyn-based creative communications agency blending traditional PR with new school social and digital. An experienced team with media, design, and tech chops ready to shake things up.";
$breadcrumb="Who We Are";
 ?>


<?php 
   include($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"); 
?> 
        				
			<section class="double-pad">
				<div class="background-image-holder  overlay-light-gradient">
					<img alt="Slide Background" class="background-image" src="img/lighthouse.jpg">
				</div>	
			
				<div class="container">
						<div class="row">
							<div class="col-md-5 col-sm-7">
									<h1 class="white-space:pre;"><span id="typed"></span></h1>
								<p class="lead">
									There's a painting of a lighthouse in our office, given to us by Larry Pray, Andy's dad, early on in our journey together. When he sent it, he offered these words: 
								</p>
							</div>
						</div>
				</div>
			
			</section>

            <section class="large-pad">
		
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 col-sm-12 text-center">
                            <p class="super-lead move-up">
									<em>"The idea is that when companies are wondering what to do, they need to head for the lighthouse. Such a lighthouse is off the shore of Popham Beach in Maine, where you first touched water. I wanted Praytell to have a painting that showed an in-motion ocean banging against something solid, with the light of a new day in the distance. This is what Praytell is all about. Lost? Give us a call. Caught in a storm? Give us a call. We're here to help, we're in this together, you can count on us."</em>
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
								
								<p class="">
									Since that day, back in a tiny shared office space in DUMBO, the painting has served as a gentle reminder to us all. To put service first. To stand the test of time. Be the first to shine in the dark, the first to greet folks to shore. A light that stands for something strong and true.</p> 

<p>Here's to the gentle daily reminders that matter, especially amidst crashing waves. </p>
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
									<img alt="Slide Background" class="background-image" src="img/larrypray-painting2.jpg">
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
							<a href="/" class="btn inner-link" alt="Back to Praytell" title="Back To The Praytell Crew"><i class="ion-arrow-left-a"></i> Back to Praytell</a>
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
                strings: ["Lighthouse"],
                typeSpeed: 2,
                backDelay: 2000,
				// backspacing speed
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
				