<?php

echo $this->Html->script('jquery.jstockticker-1.1.1.js');
?>

<script type="text/javascript">
    $(function() {
        $("#ticker").jStockTicker({interval: 35});
    });
</script>
<style type="text/css">
div#examplePage {
    color: #000;
    font-family: Verdana, Arial, Helvetica, San-serif;
    font-size: x-small;
    text-align: left;
    width: 100%;
    margin: 0 auto;
    padding: 0;
}



div#example {
    background: #c3c1c1 none repeat-x scroll left top;
    width: 100%;
    margin: 10px 0 3px;
}

div#example h3 {
    font-size: xx-small;
    font-style: italic;
    padding: 0;
    margin: 0 10px 0;
    line-height: 14px;
}

.jscroll {
    background: #fff none;
    height: 30px;
    margin: 0 auto;
    width: 100%;
}

.jscroll .wrap {
    width: 100%;
    top: 8px;
    overflow: hidden; 
    position: relative;
    line-height: normal;
    font-size-adjust: none;
    height: 12px;
}

div.stockTicker {
    font-family: Verdana, Arial, Helvetica, San-serif;
    font-size: x-small;
    list-style-type: none;
    margin: 0;
    padding: 0;
    position: relative;
    width: 8000px !important; 
}

div.stockTicker span {
    margin: 0 2px 0;
}

div.stockTicker span.up {
    color: green;
    padding-left: 14px;
    background: url('img/uparrow.png')no-repeat;
     font-weight: normal;
}

div.stockTicker span.turun {
    color: red;
    margin: 0;
    padding-left: 14px;
    background: url('img/downarrow.png')no-repeat;
    font-weight: normal;
}

div.stockTicker span.eq {
    margin: 0;
    padding-left: 10px;
}

div.stockTicker span.quote {
    margin: 0;
    font-weight: bold;
    padding-left: 10px;
    color: black;
}

</style>

<?php
	$quotes = $this->requestAction('/Mt4Prices/quote');
	
?>
	
<div id="examplePage">
 
    <div id="example">
       
               
                <div id="ticker" class="stockTicker">
                
                <?php foreach ($quotes as $quote) { ?>
	              <span class="quote">
	              <? if ($quote['Mt4Price']['DIRECTION'] == 1){ $d = 'up';}else { $d = 'turun'; }; ?>
	                	<span class="<? echo $d; ?>"><span class="quote"><?php echo str_replace("#"," ", $quote['Mt4Price']['SYMBOL']); ?></span>
	                	<? echo $quote['Mt4Price']['BID']; ?> &nbsp; <? echo $quote['Mt4Price']['ASK'];?></span>
	             <? } ?>
                </span> 
                    
               </div>
        
    </div>
</div>