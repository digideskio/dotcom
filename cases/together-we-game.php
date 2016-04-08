
<?php
$title="&#1040817; Together We Game";
$description="Praytell is a Brooklyn-based creative communications agency blending traditional PR with new school social and digital. An experienced team with media, design, and tech chops ready to shake things up.";
$breadcrumb="Case Study";
 ?>


<?php 
   include($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"); 
?>
					
            
            <!--------- DESKTOP VERSION ------------>
            
<section class="hero-project">
				<div class="background-image-holder">
					<img alt="Slide Background" class="background-image" src="../img/togetherwegame-hero.jpg">
				</div>
			
				<div class="container">
					<div class="row">
						<div class="col-md-5 col-sm-7">
							<div class="text-block">
								<div class="detail-line"></div>
								<h5 class="text-white">Case Study</h5>
								<h1 class="text-white"><span id="typed"></span></h1>
							</div>
							<h5 class="text-white">
								Logitech wanted a big idea. We are talking BIG, something totally different then they had ever done before. </h5>
                                
                               <p class="text-white">Well, this is our speciality. How about a fully fan-generated, crowd-sourced video game? It’s a project unlike any before it: a large consumer brand empowering its audience to become video game designers and to literally call the shots at each stage of the development process. Welcome to Together We Game! 

							</p>
						</div>
					</div>
				</div>
			
			</section>
            
			<section class="image-block">
				<div class="container">
					<div class="row">
						<div class="col-md-5 col-sm-7">
							<div class="text-block">
								<div class="detail-line"></div>
								<h5>The Process</h5>
								<p>
									Praytell gathered fans from around the globe on reddit, Twitter and Facebook where they brainstormed and voted on every aspect of a tower defense game - from theme and enemies to title and game economy. We even released prototypes, with a green screen and square enemies and took feedback from the crowd. All the votes and choices and suggestions were taken into consideration by our partners: Nik Mikros at Tiny Mantis Studios and Frank Lantz at the NYU Game Center and built PX57, the crowdsourced -- and crowd named -- tower defense game available for free on the app store. 
 	
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
									<img alt="Slide Background" class="background-image" src="../img/px57-1.jpg">
								</div>
							</li>
							
							<li>
								<div class="background-image-holder">
									<img alt="Slide Background" class="background-image" src="../img/px57-2.jpg">
								</div>
							</li>
                            
							<li>
								<div class="background-image-holder">
									<img alt="Slide Background" class="background-image" src="../img/px57-3.jpg">
								</div>
							</li>
						</ul>
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
									From August to December of 2014, Together We Game received 12,601 votes that influenced the creation of the final product and the final game was downloaded 8,710 times as of June 2015. Fans couldn’t get enough of the all-inclusive process - they felt included and inspired. As one fan put it best: “Thanks for doing this! I hope you find it as rewarding as I do.”
 

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
									<img alt="Slide Background" class="background-image" src="../img/px57-4.jpg">
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
									As BetaNews described, the game is “actually very fun and normal. In other words, the Internet did not spoil the game.” We actually helped build something born on the internet - Reddit of all places - and created through the interests of Logitech fans. The tower defense game is free and available for Windows, OS X and iOS - <a href="http://px57.com/" title="PX57" target="_blank">try it out</a>!
 	
								</p>
							</div>
						</div>
					</div>
				</div>
			
				<div class="image-holder embed-holder col-md-6 col-sm-4 pull-right">
					<iframe src="http://player.vimeo.com/video/128181314?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff"></iframe>
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
                strings: ["Together We Game","Logitech"],
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
				