	<link rel="stylesheet" href="<?php echo $site_url ?>/jcarousel/style.css" type="text/css" media="screen" />
		
	<script type="text/javascript" src="<?php echo $site_url ?>/jcarousel/js/jcarousellite_1.0.1.pack.js"></script>
	<script type="text/javascript" src="<?php echo $site_url ?>/jcarousel/js/captify.tiny.js"></script>
	
	
	<script type="text/javascript">
		$(function() {
    		$(".slider").jCarouselLite({
        		btnNext: ".next",
        		btnPrev: ".prev",
        		visible:3
    		});
		});

		$(document).ready(function(){
			$('img.captify').captify({
				// all of these options are... optional
				// ---
				// speed of the mouseover effect
				speedOver: 'fast',
				// speed of the mouseout effect
				speedOut: 'normal',
				// how long to delay the hiding of the caption after mouseout (ms)
				hideDelay: 500,	
				// 'fade', 'slide', 'always-on'
				animation: 'slide',		
				// text/html to be placed at the beginning of every caption
				prefix: '',		
				// opacity of the caption on mouse over
				opacity: '0.7',					
				// the name of the CSS class to apply to the caption box
				className: 'caption-bottom',	
				// position of the caption (top or bottom)
				position: 'bottom',
				// caption span % of the image
				spanWidth: '100%'
			});
		});

	</script>
	
		
		<div id="list" style="width: 100%;">
			<div class="prev"><img src="<?php echo $site_url ?>/jcarousel/images/prev.jpg" alt="prev" /></div>
					
				<div class="slider">
					<ul>
						<li>
							<a href="#" title="Title 2"><img src="<?php echo $site_url ?>/jcarousel/images/2.jpg" alt="Title 2" class="captify" /></a>
						</li>
						<li>
							<a href="#" title="Title 2"><img src="<?php echo $site_url ?>/jcarousel/images/2.jpg" alt="Title 2" class="captify" /></a>
						</li>
						<li>
							<a href="#" title="Title 3"><img src="<?php echo $site_url ?>/jcarousel/images/3.jpg" alt="Title 3" class="captify" /></a>
						</li>
						<li>
							<a href="#" title="Title 4"><img src="<?php echo $site_url ?>/jcarousel/images/4.jpg" alt="Title 4" class="captify" /></a>
						</li>
						<li>
							<a href="#" title="Title 5"><img src="<?php echo $site_url ?>/jcarousel/images/5.jpg" alt="Title 5" class="captify" /></a>
						</li>
					</ul>
				</div>
			<div class="next"><img src="<?php echo $site_url ?>/jcarousel/images/next.jpg" alt="next" /></div>
		</div>
