<?php


echo $this->Html->script('../videos/control.js');
?>

<!-- WebsiteActorLive Start-->
			<script>
			function removeElement(video)
			{
			   document.getElementById(video).style.display = 'none';
			}
			</script>

			<div id="video" style="position:fixed;bottom:0px;right:10px;z-index:10000000"><script type="text/javascript" language="JavaScript">

			visits = GetCookie('IKTRUST');

			if(visits == 1)                    { writeHTMLas1(); }
			if(visits >= 2)                    { writeHTMLas2(); }

			</script></div>
		<!-- WebsiteActorLive End-->