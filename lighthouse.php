<?php
$title="Lighthouse";
$description="Praytell is a Brooklyn-based creative communications agency blending traditional PR with new school social and digital. An experienced team with media, design, and tech chops ready to shake things up.";
$breadcrumb="Who We Are";
 ?>


<?php 
   include($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"); 
?> 
        				


            <section style="background-color:#0054a6; color:#ffffff; padding:120px 0px 50px 0px;">
		
				<div class="container">
					<div class="row" >
						<div class="col-md-6 col-md-offset-3 col-sm-12 text-center">
                                <img src="img/lighthouse-500x500.png" style="width:400px; height:auto;">
                
                                <h1 style="color:#ffffff">Lighthouse</h1>
								<h4 style="color:#ffffff">Larry Pray, Andy's dad, gave us this painting of a lighthouse early on in our journey together.<br />With it, he offered these words: </h4>
					</div>
				</div>
			</div>
			</section>
         <section class="medium-pad">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 col-sm-12 text-center">
                            <p class="super-lead">
									<em>When companies are wondering what to do, they need to head for the lighthouse. Such a lighthouse is off the shore of Popham Beach in Maine, where you first touched water. I wanted Praytell to have a painting that showed an in-motion ocean banging against something solid, with the light of a new day in the distance. This is what Praytell is all about. Lost? Give us a call. Caught in a storm? Give us a call. We're here to help, we're in this together, you can count on us.</em>
                            </p>
					</div>
				</div>
			</div>
			</section>


			<section style="background-color:#ffffff; padding:0px">
				
					<div class="row" style="padding:0px; margin:0px">
						<div class="col-md-6 col-sm-12 col-md-offset-3">
                            <img src="img/larrypray-painting2.jpg" class="img-responsive center-block">
                        </div>
					</div>
			

			</section>
              <section class="medium-pad">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 col-sm-12 text-center">
                          <p class="super-lead">Since that day, back in a tiny shared office space in DUMBO, the painting has served as a gentle reminder to us all. To put service first. To stand the test of time. Be the first to shine in the dark, the first to greet folks to shore. A light that stands for something strong and true.</p>

                           <p class="super-lead">Here's to the gentle daily reminders that matter, especially amidst crashing waves.</p>
                            
					</div>
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
				