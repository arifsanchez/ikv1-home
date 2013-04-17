<?php
    $tweet_count = '4';
?>

<!--twitter -->
<section id="twitter-sidebar">
	<div style="font-size: 24px;">
		<i class="icon-twitter icon-large"></i>
		Twitter
	</div>
    <div class="twitter"></div>
    <script type="text/javascript">
        $(document).ready(function(){
            //twitter
            $(".twitter").tweet({
                join_text: "auto",
                username: "iktrust",
                avatar_size:40,
                count:<?php echo $tweet_count; ?>,
                auto_join_text_default: "we said,",
                auto_join_text_ed: "we",
                auto_join_text_ing: "we were",
                auto_join_text_reply: "we replied",
                auto_join_text_url: "we were checking out",
                loading_text: "loading tweets..."
            });
        });
    </script>
</section>