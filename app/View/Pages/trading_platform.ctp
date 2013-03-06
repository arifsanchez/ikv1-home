<section id="container_trading">

    <ul class="breadcrumb">
      <li>
        <?php echo $this->Html->link('Home', array('controller'=>'pages','action' => 'index')); ?>
        <span class="divider">/</span>
      </li>
      <li><a href="#">Traders</a> <span class="divider">/</span></li>
      <li class="active">Trading Platform</li>
    </ul>

     <p>
        <h2>Trading Platform</h2>
    </p>

    <div id="Panel1" class="row-fluid">
       <div class="span5">
            <?php 
                echo $this->Html->image("content/combo_devices.jpg", array('class' => 'img-rounded', 'alt' => 'meta client'));
            ?>
        </div>

       <div class="span4">
            <h2>Meta Trader 4 (Windows)</h2> 
            <p>
                When you choose to trade with the IKTrust MetaTrader 4 platform, you are “driving” a dynamic and flexible platform. 
            </p>
            <p>
                MetaTrader 4 is powerful, user-friendly and has endless functionalities enjoyed by new and professional traders alike. 
            </p>
           <ul>
               <li><i class="icon-chevron-right"></i>
                    <span>Full hedging capabilities.</span>
                </li>
                <li><i class="icon-chevron-right"></i>
                    <span>Trade directly from the charts.</span>
                </li>
                <li><i class="icon-chevron-right"></i>
                    <span>100% automated high speed execution.</span>
                </li>
                <li><i class="icon-chevron-right"></i>
                    <span>Scalp the market or trade with EAs.</span>
                </li>
           </ul>
        </div>

        <div class="span3 alert">
            <?php echo $this->element('content_widget_satu'); ?>
        </div>
    </div>

    <div id="Panel2" class="row-fluid">
        <div class="span6">
            <h2>Meta Trader 4 (Android &amp; iOS)</h2> 
            <p>
                When you’re on-the-move, use IKTrust MT4 Mobile to access your Trading Account and trade through your Android & iOS mobile phone or tablet. Our IKTrust MT4 Android & iOS Platform is comparable with our full-function Trading Terminal. 
            </p>
            <p>
                You will be able to fully access the financial markets and make orders from anywhere in the world. Apply technical analysis and chart the movements to all the instruments we offer.
            </p>
            <ul class="icons">
                <li>
                    <i class="icon-chevron-right"></i>
                    Complete control over a trading account.
                </li>
                <li>
                    <i class="icon-chevron-right"></i>
                    Possibility to work from anywhere.
                </li>
                <li>
                    <i class="icon-chevron-right"></i>
                    All types of orders.
                </li>
                <li>
                    <i class="icon-chevron-right"></i>
                    Wide range of smartphones and tablet PCs.
                </li>
                <li>
                    <i class="icon-chevron-right"></i>
                    Over 20 Indicators.
                </li>
                <li>
                    <i class="icon-chevron-right"></i>
                    Real-time trading from a live tick chart.
                </li>
            </ul>
        </div>

        <div class="span5">
            <?php 
                echo $this->Html->image("content/combo_devices2.png", array('class' => 'img-rounded', 'alt' => 'meta client'));
            ?>
        </div>
    </div>

</section>