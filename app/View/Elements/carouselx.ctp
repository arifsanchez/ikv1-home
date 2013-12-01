
<?php echo $this->Html->script('jquery.bxSlider');?>


<style type="text/css">

/* 
  jQuery Logo Slider Ticker 
  by http://webdesignandsuch.com
  build with code from http://bxslider.com
*/


#slider {
  list-style:none;
  padding:0px
}

.slider-container { 
  background:#fff; 
  
  height:150px; 
  padding:20px; 
 
}

#slider img { 
  width:150px; 
  height:78px; 
  margin:0px; 
  display:inline-block ; 
  margin:20px 0;
}

#slider li {
  width:210px;
}


}

</style>
<!-- slider -->
  <script type="text/javascript">
      $(document).ready(function(){
        $('#slider').bxSlider({
        ticker: true,
        tickerSpeed: 8000,
      tickerHover: true
      });
      });
    </script>

<div class="row-fluid">
    <div class="slider-container">

      <ul id="slider">
              <li><?php echo $this->Html->image('carousel/jpmorgan.png', array('alt' => 'jpmorgan')); ?></li>
              <li><?php echo $this->Html->image('carousel/liqudityprov.png', array('alt' => 'divider')); ?></li>
              <li><?php echo $this->Html->image('carousel/goldman.png', array('alt' => 'goldman')); ?></li>
              <li><?php echo $this->Html->image('carousel/liqudityprov.png', array('alt' => 'divider')); ?></li>
              <li><?php echo $this->Html->image('carousel/bnpparibas.png', array('alt' => 'bnpparibas')); ?></li>
              <li><?php echo $this->Html->image('carousel/liqudityprov.png', array('alt' => 'divider')); ?></li>
              <li><?php echo $this->Html->image('carousel/creditsuisse.png', array('alt' => 'creditsuisse')); ?></li>
              <li><?php echo $this->Html->image('carousel/liqudityprov.png', array('alt' => 'divider')); ?></li>
              <li><?php echo $this->Html->image('carousel/goldman.png', array('alt' => 'goldman')); ?></li>
              <li><?php echo $this->Html->image('carousel/liqudityprov.png', array('alt' => 'divider')); ?></li>
              <li><?php echo $this->Html->image('carousel/bankofamerica.png', array('alt' => 'bankofamerica')); ?></li>
              <li><?php echo $this->Html->image('carousel/liqudityprov.png', array('alt' => 'divider')); ?></li>
              <li><?php echo $this->Html->image('carousel/hsbc.png', array('alt' => 'hsbc')); ?></li>
              <li><?php echo $this->Html->image('carousel/liqudityprov.png', array('alt' => 'divider')); ?></li>
              <li><?php echo $this->Html->image('carousel/morgan.png', array('alt' => 'morgan')); ?></li>
              <li><?php echo $this->Html->image('carousel/liqudityprov.png', array('alt' => 'divider')); ?></li>
          </ul>

    </div><!-- /slider -->
</div>
