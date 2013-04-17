<?php
    echo $this->Html->css('pricingtable.css');
?>

<section id="container_acc">

    <ul class="breadcrumb">
      <li>
        <?php echo $this->Html->link('Home', array('controller'=>'pages','action' => 'index')); ?>
        <span class="divider">/</span>
      </li>
      <li><a href="#">Traders</a> <span class="divider">/</span></li>
      <li class="active">Account Types</li>
    </ul>
    
    <p>
        <h2>Account Type</h2>
        <hr class="invisible">
    </p>
    <div class="row-fluid" align="center">
        <div class="pricing_table pricing_four"><!-- BEGIN TABLE CONTAINER -->
            <ul class="pricing_column_first"><!-- BEGIN DESCRIPTION COLUMN -->

                <li class="pricing_header1"></li>
                <li class="pricing_header2"><span>Features</span></li>

                <li class="odd"><span>Spread</span></li>
                <li class="even"><span>Pricing Decimals</span></li>
                <li class="odd"><span>Leverage</span></li>
                <li class="even"><span>Symbols</span></li>
                <li class="odd"><span>Minimum Deposit</span></li>
                <li class="even"><span>Recommended Deposit</span></li>
                <li class="odd"><span>Account Base Currency</span></li>
                <li class="even"><span>Swap-Free Accounts (Islamic)</span></li>
                <li class="odd"><span>Contract Size, $</span></li>
                <li class="even"><span>Minimum Lot</span></li>
                <li class="odd"><span>Minimum Step</span></li>

                <li class="pricing_footer"></li>
            </ul><!-- END DESCRIPTION COLUMN -->


            <div class="pricing_hover_area"><!-- BEGIN HOVER AREA -->
                
                <!-- BEGIN FIRST CONTENT COLUMN -->
                <ul class="pricing_column gradient_blue">
                    <li class="pricing_header1">Mini</li>
                    <li class="pricing_header2"><span>From&nbsp;</span>$10</li>
                    <li class="odd" data-table="Spread">Fixed &amp; Flexible, from 3 pip(s)</li>
                    <li class="even" data-table="Pricing Decimals">4 Decimals, 5 Decimals</li>
                    <li class="odd" data-table="Leverage">1:100, 1:200, 1:500, 1:1000</li>
                    <li class="even" data-table="Symbols">Forex Fix &amp; Flex</li>
                    <li class="odd" data-table="Minimum Deposit">$10</li>
                    <li class="even" data-table="Recomm. Deposit">$50</li>
                    <li class="odd" data-table="Acc Base Currency">USD</li>
                    <li class="even" data-table="Swap-Free Acc (Islamic)">YES</li>
                    <li class="odd" data-table="Contract Size">10,000</li>
                    <li class="even" data-table="Min Lot">0.01 </li>
                    <li class="odd" data-table="Min Step">0.01</li>
                    

                    <li class="pricing_footer"><a href="http://support.iktrust.com/downloads/files/35-view/download" class="pricing_button">Open Mini Account</a></li>
                </ul>
                <!-- END FIRST CONTENT COLUMN -->


                <!-- BEGIN SECOND CONTENT COLUMN -->
                <ul class="pricing_column gradient_green">
                    <li class="pricing_header1">Standard</li>
                    <li class="pricing_header2"><span>From&nbsp;</span>$1,000</li>
                    <li class="odd" data-table="Spread">Floating, from 0,1 pip(s)</li>
                    <li class="even" data-table="Pricing Decimals">5 Decimals</li>
                    <li class="odd" data-table="Leverage">1:1, 1:10, 1:100, 1:200, 1:500</li>
                    <li class="even" data-table="Symbols">Forex Direct, Gold &amp; Silver</li>
                    <li class="odd" data-table="Minimum Deposit">$1000</li>
                    <li class="even" data-table="Recomm. Deposit">$2500</li>
                    <li class="odd" data-table="Acc Base Currency">USD</li>
                    <li class="even" data-table="Swap-Free Acc (Islamic)">YES</li>
                    <li class="odd" data-table="Contract Size">100,000</li>
                    <li class="even" data-table="Min Lot">0.10</li>
                    <li class="odd" data-table="Min Step">0.01</li>
                   

                    <li class="pricing_footer"><a href="http://support.iktrust.com/downloads/files/35-view/download" class="pricing_button">Open Standard Account</a></li>
                </ul>
                <!-- END SECOND CONTENT COLUMN -->


                <!-- BEGIN THIRD CONTENT COLUMN -->
                <ul class="pricing_column gradient_yellow">
                    <li class="pricing_header1">Premium</li>
                    <li class="pricing_header2"><span>From&nbsp;</span>$10,000</li>
                    <li class="odd" data-table="Spread">Floating, from 0,1 pip(s)</li>
                    <li class="even" data-table="Pricing Decimals">5 Decimals</li>
                    <li class="odd" data-table="Leverage">1:1, 1:10, 1:100, 1:200</li>
                    <li class="even" data-table="Symbols">Forex Direct, Gold &amp; Silver</li>
                    <li class="odd" data-table="Minimum Deposit">$10,000</li>
                    <li class="even" data-table="Recomm. Deposit">$25,000</li>
                    <li class="odd" data-table="Acc Base Currency">USD</li>
                    <li class="even" data-table="Swap-Free Acc (Islamic)">YES</li>
                    <li class="odd" data-table="Contract Size">100,000</li>
                    <li class="even" data-table="Min Lot">1.00</li>
                    <li class="odd" data-table="Min Step">0.10</li>
                    

                    <li class="pricing_footer"><a href="http://support.iktrust.com/downloads/files/35-view/download" class="pricing_button"> Open Premium Account</a></li>
                </ul><!-- END THIRD CONTENT COLUMN -->
            </div><!-- END HOVER AREA -->
        </div><!-- END TABLE CONTAINER -->
    </div>
</section>


