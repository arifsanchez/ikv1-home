<?php


echo $this->Html->css('clean_red');
echo $this->Html->script('newsticker.jquery.min');
?>



<ul id="newsticker_1" class="newsticker">

</ul>



<script>
(function($){ 
	$(document).ready(function() {
		$('#newsticker_1').newsticker( {
		
			  'style'         : 'fade',
              'tickerTitle'   : 'News',
              'feeds'         : 'http://support.iktrust.com/news.rss',
              'feedItems'     : 5,
              'feedFormat'    : '<a href="%link%">%title%</a> posted %timeago%.', // Format that each news item will take              
              'pauseOnHover'  : true,
              'autoStart'     : true,              
              'showControls'  : true,
              'fadeOutspeed'  : 'slow',
              'fadeInSpeed'   : 'slow',
              'transitionSpeed' : 4000
		});
	 });
})(jQuery);
</script> 