<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=100%; initial-scale=1; maximum-scale=1; minimum-scale=1; user-scalable=no;" />
    <link rel="icon" href="http://iktrust.com/img/favicon.png" type="image/png">
    <link rel="shortcut icon" href="http://iktrust.com/img/favicon.png" type="image/png" />
    <meta name="google-site-verification" content="N2qGggHrf0WVxXtNgrF54jL6GB8W49MYLaqE7MN-Ir4" />
    <title>IK Trust | Forex | Forex Broker</title>
  

    <?php 

      echo $this->Html->css('bootstrap.css');
      echo $this->Html->css('font-awesome-ie7.css');
      echo $this->Html->css('font-awesome.css');
      echo $this->Html->css('style.css');
      echo $this->Html->css('prettyPhoto.css');
      echo $this->Html->css('layerslider.css');
      echo $this->Html->css('skin.css');
      echo $this->Html->css('button.css');
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
        'iktrust, ik trust, forex, forex broker, metatrader 4, mt4,'
    );

    echo $this->Html->meta(
        'description',
        'Register today for a FX, CFD, Indices & Commodities trading and Asset Management with Islamic Accounts'
    );
  ?>
  <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

</head>

<body>
<script type="text/javascript">
    $(document).ready(function(){
        $('#layerslider').layerSlider({
            skinsPath : './css/fullwidth/',
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

               
                      <a href="http://live.iktrust.com" class="custombtn five pull-right">Login IKtrust Cabinet </a>

           
                                   
                   
                   <!--a href="#myModal" role="button" data-toggle="modal" class="btn btn-large btn-danger pull-right">Sign Up</a-->

                   <!--a href="#myModal2" role="button" data-toggle="modal" class="btn btn-large btn-info pull-right">Sign In</a-->
               
               </div>
    </div>
</section>
<header id="header">
    <div class="container">
        <div class="row">
        
            <div class="span3 logo">
                <?php echo $this->Html->image("main-logo.png", array(
    "alt" => "IK Trust Capital Market Corporation Ltd.",
    'url' => array('controller' => '/', 'action' => '/')
));?>
            </div>
            
            <?php echo $this->element('main-menu'); ?>

        </div>
<?php #echo $this->element('stockmarket'); ?>
    </div>
</header>

<?php if($this->request->params['pass'][0] == 'utama'){ ?>
    <?php echo $this->element('layar'); ?>
<?php }?>

<section id="container">

  <div class="container">
    <div class="row-fluid">
    <?php 
      echo $this->Session->flash();
      echo $this->fetch('content'); 
    ?>
    </div>
  </div>
</section>


<!--footer-->
<?php echo $this->element('footer'); ?>
<?php echo $this->element('footer-script'); ?>

</body>
</html>