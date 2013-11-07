<?php
echo $this->Html->css('owl.carousel');
echo $this->Html->script('owl.carousel.min');
?>

<script type="text/javascript">
$(document).ready(function() {
 
  $("#owl-demo").owlCarousel({
 
      autoPlay: 3000, //Set AutoPlay to 3 seconds
 
      items : 4,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]
 
  });
 
});

</script>
<style type="text/css">
#owl-demo .item{
  margin: 8px;
 display: inline-block;
  padding: 8px;
  border: 2px solid #B6B6B6;
  border-radius: 6px;
  box-shadow:
    0 2px 1px rgba(0, 0, 0, 0.2), 
    inset 0 2px 1px rgba(0, 0, 0, 0.2);
    
  /* Font styles */
  text-decoration: none;
  font-size: 14px;
  text-transform: uppercase;
  color: #222;

}
#owl-demo .item:hover  { border-color: #F12439; }
#owl-demo .item:active { border-color: #ED2739; }
#owl-demo .item img{
  display: block;
  width: 100%;
  height: auto;
}


</style>
<div class="row-fluid">

<div id="owl-demo">
          
  <div class="item"><?php echo $this->Html->image('carousel/jpmorgan.png', array('alt' => 'jpmorgan')); ?></span></div>
  <div class="item"><?php echo $this->Html->image('carousel/goldman.png', array('alt' => 'goldman')); ?></div>
  <div class="item"><?php echo $this->Html->image('carousel/bnpparibas.png', array('alt' => 'bnpparibas')); ?></div>
  <div class="item"><?php echo $this->Html->image('carousel/creditsuisse.png', array('alt' => 'creditsuisse')); ?></div>
  <div class="item"><?php echo $this->Html->image('carousel/bankofamerica.png', array('alt' => 'bankofamerica')); ?></div>
  <div class="item"><?php echo $this->Html->image('carousel/hsbc.png', array('alt' => 'hsbc')); ?></div>
  <div class="item"><?php echo $this->Html->image('carousel/morgan.png', array('alt' => 'morgan')); ?></div>
  <div class="item"><?php echo $this->Html->image('carousel/primefx.png', array('alt' => 'primefx')); ?></div>
 
</div>
</div>