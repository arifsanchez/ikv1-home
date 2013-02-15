<!-- Start - Slideshow -->
<?php echo $this->element('slider'); ?>
<!-- end - Slideshow -->
 <nav id="secondary" class="hidden-phone">
    <a href="#Panel1" class="assets"><i></i><span class="hidden-phone">Showcase Portfolio</span> </a>
    <a href="#Panel2" class="clients"><i></i><span class="hidden-phone">Manage Customers </span></a>
    <a href="#panel1" class="mobile"><i></i><span class="hidden-phone">Get Responsive </span></a>
    <a href="#Panel2" class="communicate"><i></i><span class="hidden-phone">Stay In Touch</span> </a>
</nav>
<section id="container">
    <!--Welcome block goes inside page content but not wrapped in 1170 Container, wrapping is applied inside-->
    <section id="welcome2">
        <div class="container welcome2-wrap">
        <!--<h1>Ut nulla <span>eget massa</span> blandit eleifend sed lacus!</h1>-->
        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. In et mi libero. Vestibulum aliquam elit sed eros vehicula pellentesque. Vestibulum quis elit augue.Phasellus enim diam, scelerisque at lobortis quis, mollis mollis sem.“ <span class="welcome-signature pull-right">– Marcus Aurelius, Ancient Rome</span> </p>

        <!--<a class="btn btn-welcome btn-large pull-right">Learn more</a>-->
        </div>
    </section>

<div class="container">

    <!--div class="row highlights">
        <div class="span3">
            <i class="icon-cogs"></i>
            <h3>Customizable</h3>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo.</p>

            <p>
        </div>
        <div class="span3">
            <i class="icon-reorder"></i>
            <h3>HTML5/CSS3 Code</h3>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo.</p>

            <p>
        </div>
        <div class="span3">
            <i class="icon-user"></i>
            <h3>User Friendly</h3>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo.</p>

            <p>
        </div>
        <div class="span3">
            <i class="icon-money"></i>
            <h3>Affordable Price</h3>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo.</p>

            <p>
        </div>
    </div-->
    <hr class="invisible">
    <div id="Panel1" class="row">
       <div class="span6"><?php echo $this->Html->image("content/combo_devices.jpg", array('class' => 'img-rounded', 'alt' => 'meta client')) ;?></div>
       <div class="span6">
           <h2>We use FontAwesome in features list to give our customers better control over color schemes. Here you can provide a brief list of your advantages over competitors etc:</h2>
           <ul>
               <li><i class="icon-check"></i><span>Clean CSS3/HTML5 Code:</span>  Lorem ipsum dolor sit amet, consectetur adipiscing elit. In et mi libero. Vestibulum aliquam elit sed eros vehicula pellentesque.</li>
               <li><i class="icon-check"></i><span>Responsive Layout:</span>  Lorem ipsum dolor sit amet, consectetur adipiscing elit. In et mi libero. Vestibulum aliquam elit sed eros vehicula pellentesque.</li>
               <li><i class="icon-check"></i><span>Twitter Bootstrap Based:</span>  Lorem ipsum dolor sit amet, consectetur adipiscing elit. In et mi libero. Vestibulum aliquam elit sed eros vehicula pellentesque.</li>
               <li><i class="icon-check"></i><span>Clean and Readable Typography:</span>  Lorem ipsum dolor sit amet, consectetur adipiscing elit. In et mi libero. Vestibulum aliquam elit sed eros vehicula pellentesque.</li>
           </ul>

       </div>
    </div>

    <div id="Panel2" class="grey-panel row">
             <div class="span6">
                <h2>Use different styling options for your features and products:</h2>
                <ul class="icons">
                    <li><i class="icon-ok"></i>CLorem ipsum dolor sit amet, consectetur adipiscing elit. In et mi libero. </li>
                    <li><i class="icon-ok"></i>Vestibulum aliquam elit sed eros vehicula pellentesque. </li>
                    <li><i class="icon-ok"></i>Result may vary ;-) </li>
                    <li><i class="icon-ok"></i>Fusce dapibus, tellus ac cursus commodo, tortor mauris</li>
                    <li><i class="icon-ok"></i>Donec id elit non mi porta gravida at eget metus. Fusce dapibus </li>
                    <li><i class="icon-ok"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In et mi libero.</li>
                </ul>
             </div>
            <div class="span5"><?php echo $this->Html->image("content/combo_devices2.png", array('class' => 'img-rounded', 'alt' => 'metatrader')) ;?></div>

    </div>
    <hr class="invisible" >
    <div class="row">
        <div class="span8">
            <div id="myCarousel" class="carousel slide">
                <div class="carousel-inner">
                    <div class="item testimonials active">
                        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>

                    </div>
                    <div class="item testimonials">
                        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>

                    </div>
                    <div class="item testimonials">
                        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>

                    </div>
                </div>
                <a class="left carousel-control control-fix carousel-control-extra" href="#myCarousel" data-slide="prev">‹</a>
                <a class="right carousel-control carousel-control-extra" href="#myCarousel" data-slide="next">›</a>
            </div>
        </div>
        <div class="span4">

                <ul class="nav nav-tabs" id="myTab">
                    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                    <li class=""><a data-toggle="tab" href="#profile">Profile</a></li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class=""><a data-toggle="tab" href="#dropdown1">@fat</a></li>
                            <li class=""><a data-toggle="tab" href="#dropdown2">@mdo</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div id="home" class="tab-pane fade active in">
                        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                    </div>
                    <div id="profile" class="tab-pane fade">
                        <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
                    </div>
                    <div id="dropdown1" class="tab-pane fade">
                        <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                    </div>
                    <div id="dropdown2" class="tab-pane fade">
                        <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
                    </div>
                </div>


        </div>
    </div>
</div>



</section>