<?php
echo $this->fetch('meta');
echo $this->fetch('css');
echo $this->fetch('script');

echo $this->Html->css('clean_red');
echo $this->Html->script('newsticker.jquery.min');

?>



<ul id="newsticker_1" class="newsticker">

</ul>



<script>
(function($){ 
	$(document).ready(function() {
		$('#newsticker_1').newsticker( {
		'style' : 'fade',
		'tickerTitle' : 'Latest News',
		'feeds' : 'http://support.iktrust.com/news.rss',
		'autoStart' : true,
		'showControls' : true,
		'fadeOutspeed' : 'slow',
		'fadeInSpeed' : 'slow',
		'transitionSpeed' : 4000
		});
	 });
})(jQuery);
</script> 