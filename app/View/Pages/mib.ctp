<section id="container_trading">

    <ul class="breadcrumb">
      <li>
        <?php echo $this->Html->link('Home', array('controller'=>'pages','action' => 'index')); ?>
        <span class="divider">/</span>
      </li>
     <li><a href="#">Partnership</a> <span class="divider">/</span></li>
      <li class="active">MIB</li>
    </ul>
 <div class="row-fluid">
         <div class="span12">
                <div class="span6">
                  <?php 
                    echo $this->Html->image("slider/banner4/mib.png", array('class' => 'img-rounded', 'alt' => 'cars awesome'));
                ?>
                </div>
                <div class="span6">
                <?php 
                    echo $this->Html->image("slider/banner4/mercs-1.png", array('class' => 'img-rounded', 'alt' => 'cars awesome'));
                ?>
                </div>
           </div>
      </div>
      <div id="Panel1" class="row-fluid">
        

         <div class="span12">
              <h2>MASTER INTRODUCING BROKER (MIB)</h2>
  				<p>Our partnership programs are set on offering you a unique package of benefits that have yet to be seen elsewhere on the forex scene and are much anticipated in the industry. The programs offered will cover an array of partner types including Introducers Brokers & Affiliates. Each program opens a window of opportunity for one to become part of one of the world's most significant financial markets, and each has been developed with the intention of perfectly matching the needs of different partner types.</p>

  				<h2>WHY BECOME MIB ?</h2>
  				<p>By becoming an <span class="label label-info">MIB</span>, you can expand your business, build a large network of clients and increase your earnings by following a simple set of steps. Being an <span class="label label-info">MIB</span> at IKTRUST also includes a number of special perks such as having the ability to view your rebates in detail in  your personal space on our website.</p>
       </div>
    </div>
     <div id="Panel2" class="row-fluid">
       <div class="span12">
              <?php 
                  echo $this->Html->image("content/WHY-MIB-BANNER5.png", array('class' => 'img-rounded', 'alt' => 'meta client'));
              ?>
        </div>
        
        
    </div>
    
     <div class="row-fluid"><h3>Be our MIB now by emailing to <a href="http://support.iktrust.com">partnership@iktrust.com</a></h3>
    </div>
   <div class="maintitle">Few of Our Successful Master Introducing Broker
<small>(MIB)</small></div>
    <div class="row-fluid" style="text-align:center;">
          <div class="span2"> 
            <div class="hoveritem boxs img-rounded">
              <a class="link" href="http://www.gainfx.my/">
                <div class="hovercontent">
                  <h1>www.gainfx.my</h1>
                  <h3>GainFX System</h3>
                </div>
                <?php 
                  echo $this->Html->image("logomib/gainfx.png");
                 ?>
                 
              </a>
            </div>
         </div>
             <div class="span2"> 
            <div class="hoveritem boxs img-rounded">
              <a class="link" href="http://www.bmtrust.biz/">
                <div class="hovercontent">
                  <h1>www.bmtrust.biz</h1>
                  <h3>BM Technology Resources</h3>
                </div>
                   <?php 
                  echo $this->Html->image("logomib/bmtrust.png");
                 ?>
             
              </a>
            </div>
         </div>
        
          <div class="span2"> 
            <div class="hoveritem boxs img-rounded">
              <a class="link" href="http://www.axstreet.com/">
                <div class="hovercontent">
                  <h1>www.axstreet.com</h1>
                  <h3>AX Street</h3>
                </div>
                <?php 
                  echo $this->Html->image("logomib/axstreet.png");
                 ?>
               
              </a>
            </div>
         </div>
         <div class="span2"> 
            <div class="hoveritem boxs img-rounded">
              <a class="link" href="http://www.iktrustfx.com/">
                <div class="hovercontent">
                  <h1>www.iktrustfx.com</h1>
                  <h3>IKTrust FX Malaysia</h3>
                </div>
                <?php 
                  echo $this->Html->image("logomib/ikfx.png");
                 ?>
               
              </a>
            </div>
         </div>
       
         <div class="span2"> 
            <div class="hoveritem boxs img-rounded">
              <a class="link" href="http://www.xcellentfx.com/">
                <div class="hovercontent">
                  <h1>www.xcellentfx.com</h1>
                  <h3>Xcellent FX</h3>
                </div>
                 <?php 
                  echo $this->Html->image("logomib/xcelent.png");
                 ?>
               
              </a>
            </div>
         </div>
           <div class="span2"> 
            <div class="hoveritem boxs img-rounded">
              <a class="link" href="http://www.iktrust.co.id">
                <div class="hovercontent">
                  <h1>www.iktrust.co.id</h1>
                  <h3>IK Market Technology</h3>
                </div>
                 <?php 
                  echo $this->Html->image("logomib/ikindo.png");
                 ?>
             
              </a>
            </div>
         </div>
        </div>
     </div>

   

</section>

<style type="text/css">


.boxs{
  background: none;
  border: 2px solid #fff;
  box-shadow: 0 0 3px rgba(0,0,0,0.5), inset 0 0 100px rgba(0,0,0,0.4);
 
  
  position: relative;
  width: 200px;
  transition: background 0.3s ease-out;
}


.maintitle {
     border-bottom: 1px solid #FFFFFF;
    box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
    counter-increment: section-2;
    counter-reset: section-3 section-4;
    font-family: 'Arial',sans-serif;
    font-size: 27px;
    font-weight: normal;
    line-height: 40px;
    margin: 92px 0 33px;
    padding-bottom: 10px;
}

.hovercontent h1 {
  color: white;
  font-size: 1.5em;
  margin-top: 10%;
  text-transform: none;
}

.hovercontent h3 {
  color: #a1a1a1;
  font-weight: 100;
}



.hoveritem {
  max-width: 100%;
  font-size: 12px;
  display: inline-block;
  position: relative;
  overflow: hidden;
}
.hoveritem img {
  max-width: 100%;
}
.hoveritem .link {
  display: block;
  height: 100%;
}
.hovercontent {
  position: absolute;
  font-family: "Helvetica", Arial, sans-serif;
  text-align: center;
  width: 100%;
  height: 100%;
  background: rgba(0,0,0,0.7);

  opacity: 0;
  line-height: 24px;
  filter: alpha(opacity=0);
  -moz-transform: scale3d(1.3, 1.3, 1) translate3d(0, 10%, 0);
  -o-transform: scale3d(1.3, 1.3, 1) translate3d(0, 10%, 0);
  -webkit-transform: scale3d(1.3, 1.3, 1) translate3d(0, 10%, 0);
  transform: scale3d(1.3, 1.3, 1) translate3d(0,10%,0);
  
  -webkit-transition: opacity 0.2s ease-out, -webkit-transform 0.2s ease-out;
  -moz-transition: opacity 0.2s ease-out, -moz-transform 0.2s ease-out;
  -o-transition: opacity 0.2s ease-out, -o-transform 0.2s ease-out;
  transition: opacity 0.2s ease-out, transform 0.2s ease-out;
}

.hoveritem .link:hover {
}
.hoveritem .link:hover .hovercontent {
  opacity: 1;
  -moz-transform: scale3d(1, 1, 1) translate3d(0, 0, 0);
  -o-transform: scale3d(1, 1, 1) translate3d(0, 0, 0);
  -webkit-transform: scale3d(1, 1, 1) translate3d(0, 0, 0);
  transform: scale3d(1, 1, 1) translate3d(0,0,0);
}


</style>
