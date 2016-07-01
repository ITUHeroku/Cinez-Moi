<link href="<?php echo css_url("jplayer.blue.monday.min");?>" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?php echo js_url("jquery.jplayer.min");?>"></script>
<script type="text/javascript" src="<?php echo js_url("jplayer.playlist.min");?>"></script>
<script type="text/javascript">
$(document).ready(function(){
	var video=$('#data-video').attr('data-video');
	var resultVideo='';
	for(var i=0;video[i]!='.';i++)
		resultVideo+=video[i];
	new jPlayerPlaylist({
		jPlayer: "#jquery_jplayer_1",
		cssSelectorAncestor: "#jp_container_1"
	}, [
		
		{
			title:"play pour regarder la bande annonce",
			artist:"",
			mp4: "http://localhost/Film/assets/video/"+resultVideo+".mp4",
			ogv: "http://localhost/Film/assets/video/"+resultVideo+".ogv",
			webmv: "http://localhost/Film/assets/video/"+resultVideo+".webm",
			poster:""
		}
		
		
	], {
		swfPath: "../../dist/jplayer",
		supplied: "webmv,ogv,mp4",
		useStateClassSkin: true,
		autoBlur: false,
		smoothPlayBar: true,
		keyEnabled: true
	});
	
	

});
</script>