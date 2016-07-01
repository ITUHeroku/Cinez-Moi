<script type="text/javascript" src="<?php echo js_url("jquery.flexisel");?>"></script>
<script type="text/javascript">
	$(window).load(function() {
	  $("#flexiselDemo1").flexisel({
			visibleItems: 5,
			animationSpeed: 1000,
			autoPlay: true,
			autoPlaySpeed: 3000,    		
			pauseOnHover: false,
			enableResponsiveBreakpoints: true,
			responsiveBreakpoints: { 
				portrait: { 
					changePoint:480,
					visibleItems: 2
				}, 
				landscape: { 
					changePoint:640,
					visibleItems: 3
				},
				tablet: { 
					changePoint:800,
					visibleItems: 4
				}
			}
		});
	});
</script>
