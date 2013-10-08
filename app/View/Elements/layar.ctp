  <?php 
      echo $this->Html->css('apple-style.css');
      echo $this->Html->script('jquery.sequence-min.js');
 ?>

    
    
 <!-- Slider -->
 
 <div id="sequence-theme" class="hidden-phone">
			<div id="sequence">

				<!--ul class="controls">
					<li class="status"></li>
					<li class="sequence-prev"></li>
					<li class="sequence-pause"></li>
					<li class="sequence-next"></li>
				</ul-->

				<ul class="sequence-canvas">
					<li class="animate-in">
						<div class="slide2">
							<a href="#">
								<img src="img/slider/banner1/buttonhere.png">
							</a>
						</div>
							
						<img class="ipad" src="img/slider/banner1/icons.png" />
						
						<img class="iphone" src="img/slider/banner1/barclay.png"  />
						
					</li>
					<li>
						<img class="ipad" src="img/slider/banner2/frank.png" />
						<img width="38%"class="iphone3" src="img/slider/banner2/frank2.png" />
								
					</li>
					<li>
						
						<img class="ipad" src="img/slider/banner3/mibbanner.png" />
						
						<div class="slide3" style="padding-left:50px;top:180px;">
							<?php echo $this->Html->image("slider/banner1/formoreinfo.png", array(
						    "alt" => "click here",
						    'style' => "width:60%",
						    'url' => array('controller' => 'pages', 'action' => 'mib',)
						    )); ?>
						</div>
						
						<img class="iphone4" src="img/slider/banner3/mindmaps.png" />
						
					</li>
					<li>
						<img width="55%" class="ipad" src="img/slider/banner4/mib.png" />

						<div class="slide3" style="top:248px;left:189px">
							<a href="#">
								<img src="img/slider/banner1/buttonhere.png" width="77%">
							</a>
						</div>
						<img width="54%" class="iphone2" src="img/slider/banner4/mercs-1.png" />
								
					</li>
				</ul>

			</div>
		</div>
          
 <!-- /Lush FlexSlider -->
          <script>
				  $(document).ready(function(){
				    $status = $(".status");
				    var options = {
				        autoPlay: true,
				        autoPlayDelay: 4000,
				        pauseOnHover: false,
				        hidePreloaderDelay: 500,
				        nextButton: true,
				        prevButton: true,
				        pauseButton: true,
				        preloader: true,
				        hidePreloaderUsingCSS: false,                   
				        animateStartingFrameIn: true,    
				        navigationSkipThreshold: 750,
				        preventDelayWhenReversingAnimations: true,
				        customKeyEvents: {
				            80: "pause"
				        }
				    };
				
				    var sequence = $("#sequence").sequence(options).data("sequence");
				
				    sequence.afterNextFrameAnimatesIn = function() {
				        if(sequence.settings.autoPlay && !sequence.hardPaused && !sequence.isPaused) {
				            $status.addClass("active").css("opacity", 1);
				        }
				        $(".prev, .next").css("cursor", "pointer").animate({"opacity": 1}, 500);
				    };
				    sequence.beforeCurrentFrameAnimatesOut = function() {
				        if(sequence.settings.autoPlay && !sequence.hardPaused) {
				            $status.css({"opacity": 0}, 500).removeClass("active");
				        }
				        $(".prev, .next").css("cursor", "auto").animate({"opacity": .7}, 500);
				    };
				    sequence.paused = function() {
				        $status.css({"opacity": 0}).removeClass("active").addClass("paused");
				    };
				    sequence.unpaused = function() {
				        if(!sequence.hardPaused) {
				            $status.removeClass("paused").addClass("active").css("opacity", 1)
				        }               
				    };
				});
          </script>
    
         