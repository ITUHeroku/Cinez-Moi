<script src="<?php echo js_url("jquery.nicescroll");?>"></script>
<script src="<?php echo js_url("scripts");?>"></script>
<script src="<?php echo js_url("bootstrap.min");?>"></script>
<script src="<?php echo js_url("classie");?>"></script>
<script src="<?php echo js_url("uisearch");?>"></script>
<script src="<?php echo js_url("responsiveslides.min");?>"></script>
<script>
	new UISearch( document.getElementById( 'sb-search' ) );
</script>
<script>
$(function () {
  $("#slider4").responsiveSlides({
	auto: true,
	pager:true,
	nav:true,
	speed: 500,
	namespace: "callbacks",
	before: function () {
	  $('.events').append("<li>before event fired.</li>");
	},
	after: function () {
	  $('.events').append("<li>after event fired.</li>");
	}
  });

});
</script>