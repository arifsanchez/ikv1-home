<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=100%; initial-scale=1; maximum-scale=1; minimum-scale=1; user-scalable=no;" />
    <link rel="icon" href="images/favicon.png" type="image/png">
    <link rel="shortcut icon" href="images/favicon.png" type="image/png" />
    <title>IK Trust | Forex | Forex Broker</title>
  

    <?php 
      echo $this->Html->css('bootstrap.css');
      echo $this->Html->css('font-awesome-ie7.css');
      echo $this->Html->css('font-awesome.css');
      echo $this->Html->css('style.css');
      echo $this->Html->css('prettyPhoto.css');
      echo $this->Html->css('layerslider.css');
      echo $this->Html->css('skin.css');
      echo $this->Html->script('jquery.min.js');
      echo $this->Html->script('bootstrap.min.js');
      echo $this->Html->script('jquery.easing.1.3.js');
      echo $this->Html->script('jquery.quicksand.js');
      echo $this->Html->script('superfish.js');
      echo $this->Html->script('hoverIntent.js');
      echo $this->Html->script('jquery.hoverdir.js');
      echo $this->Html->script('jquery.flexslider.js');
      echo $this->Html->script('jflickrfeed.min.js');
      echo $this->Html->script('jquery.prettyPhoto.js');
      echo $this->Html->script('jquery.elastislide.js');
      echo $this->Html->script('jquery.tweet.js');
      echo $this->Html->script('smoothscroll.js');
      echo $this->Html->script('jquery.ui.totop.js');
      echo $this->Html->script('main.js');
      echo $this->Html->script('ajax-mail.js');
      echo $this->Html->script('jQuery.BlackAndWhite.min.js');
      echo $this->Html->script('accordion.settings.js');
      echo $this->Html->script('layerslider.kreaturamedia.jquery.js');

      echo $this->Html->meta(
        'keywords',
        'iktrust, iktrust'
    );

    echo $this->Html->meta(
        'description',
        'Islamic Forex Trading Account Broker'
    );
  ?>
  <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

</head>

<body>
<script type="text/javascript">
    $(document).ready(function(){
        $('#layerslider').layerSlider({
            skinsPath : './skins/',
            skin : 'fullwidth',
            thumbnailNavigation : 'hover',
            hoverPrevNext : false
        });
        $('ul.nav').superfish({
            speed : 1
        });
        $("[rel=tooltip]").tooltip();
    });
 </script>
<section class="message-top">
    <div>
               <div class="notification container">
                   <!--a href="#myModal" role="button" data-toggle="modal" class="btn btn-large btn-danger pull-right">Sign Up</a-->

                   <!--a href="#myModal2" role="button" data-toggle="modal" class="btn btn-large btn-info pull-right">Sign In</a-->
                   <!-- Registration Form -->
                   <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                       <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           <h3 id="myModalLabel">Sign Up here</h3>
                       </div>
                       <div class="modal-body">
                           <form class="form-horizontal">
                               <div class="control-group">
                                   <label class="control-label" for="inputEmail">Email</label>
                                   <div class="controls">
                                       <input type="text" id="inputE-mail-new" placeholder="Email">
                                   </div>
                               </div>
                               <div class="control-group">
                                   <label class="control-label" for="inputPassword">Password</label>
                                   <div class="controls">
                                       <input type="password" id="inputPassword-new" placeholder="Password">
                                   </div>
                                   <label class="control-label" for="inputPassword">Confirm Password</label>
                                   <div class="controls">
                                       <input type="password" id="inputPassword-new-confirm" placeholder="Password">
                                   </div>
                               </div>
                            </form>
                       </div>
                       <div class="modal-footer">
                           <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                           <button class="btn btn-danger">Sign Up</button>
                       </div>
                   </div>
                   <!-- Login Form -->
                   <div id="myModal2" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                       <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           <h3 id="myModalLabel2">Login Form</h3>
                       </div>
                       <div class="modal-body">
                           <form class="form-horizontal">
                               <div class="control-group">
                                   <label class="control-label" for="inputEmail">Email</label>
                                   <div class="controls">
                                       <input type="text" id="inputE-mail" placeholder="Email">
                                   </div>
                               </div>
                               <div class="control-group">
                                   <label class="control-label" for="inputPassword">Password</label>
                                   <div class="controls">
                                       <input type="password" id="inputPassword" placeholder="Password">
                                   </div>
                               </div>
                               <div class="control-group">
                                   <div class="controls">
                                       <label class="checkbox">
                                           <input type="checkbox"> Remember me
                                       </label>
                                       <button type="submit" class="btn">Sign in</button>
                                   </div>
                               </div>
                           </form>
                       </div>
                       <div class="modal-footer">
                           <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                           <button class="btn btn-danger">Sign In</button>
                       </div>
                   </div>
        </div>
    </div>
</section>
<header id="header">
    <div class="container">
        <div class="row">
            <div class="span3 logo">
                <?php echo $this->Html->image("main-logo.png", array(
    "alt" => "Brownies",
    'url' => array('controller' => '/', 'action' => '/')
));?>
            </div>
            
            <nav id="menu" class="pull-right">
                <ul>
                    <li class="current"><a href="#">About Us</a>
                        <ul>
                            <li><a href="#">Our Company</a></li>
                            <li ><a href="#" >24/7 Customer Support</a></li>
                            <li ><a href="#" >Islamic Trading Accont</a></li>
                            <li ><a href="#" >Safety of clients funds</a></li>
                            <li class="last"><a href="#" >Hassle Free Trading</a></li>
                        </ul>
                    </li>
                    <!--li><a href="#">News</a></li-->
                    <li><a href="#"><span class="name">Trading</span></a>
                        <ul>
                            <li><a href="#">Trading Account Type</a></li>
                            <li><a href="#">Trading Platform</a></li>
                            <li><a href="#">Trading Instruments</a></li>
                            <li><a href="#">Money Manager</a></li>
                            <li><a href="#">Economic Calender</a></li>
                            <li class="last"><a href="#">Market News</a></li>
                        </ul>
                    </li>
                    <li><a href="#" >Funding</a>
                        <ul>
                            <li><a href="#">Deposit Funds</a></li>
                            <li><a href="#">Withdraw Funds</a></li>
                            <li class="last"><a href="#">Funding Terms</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Partnership</a>
                        <ul>
                            <li><a href="#">Affliates</a></li>
                            <li><a href="#">Introducing Brokers</a></li>
                            <li><a href="#">Regional Partners</a></li>
                            <li class="last"><a href="#">Partners eWallet</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Trader Rewards</a>
                      <ul>
                            <li><a href="#">Every Deposit Bonus</a></li>
                            <li><a href="#">Free G-Shock Watch</a></li>
                            <li><a href="#">Equity Booster</a></li>
                            <li class="last"><a href="#">8.88USD Free Bonus</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Investment</a>
                      <ul>
                            <li><a href="#">Why IK Invest</a></li>
                            <li><a href="#">Our Objectives</a></li>
                            <li><a href="#">Our Vision</a></li>
                             <li><a href="#">Investment Return</a></li>
                            <li class="last"><a href="#">Term & Conditions</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Support</a>
                      <ul>
                            <li><a href="#">Support Channels</a></li>
                            <li><a href="#">Request Free Call</a></li>
                            <li><a href="#">Visit Partner Offices</a></li>
                            <li class="last"><a href="#">Send Us a Message</a></li>
                        </ul>
                    </li>

                </ul>
            </nav>

        </div>

    </div>
</header>




<?php echo $this->fetch('content'); ?>
   
<?php echo $this->Session->flash();?>


<!--footer-->
<?php echo $this->element('footer'); ?>
<?php echo $this->element('livechat'); ?>



</body>
</html>