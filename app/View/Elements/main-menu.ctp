<nav id="menu" class="pull-right">
    <ul>
        <!--
        <li class="current"><a href="#">About Us</a>
            <ul>
                <li><a href="#">Our Company</a></li>
                <li ><a href="#" >24/7 Customer Support</a></li>
                <li ><a href="#" >Islamic Trading Accont</a></li>
                <li ><a href="#" >Safety of clients funds</a></li>
                <li class="last"><a href="#" >Hassle Free Trading</a></li>
            </ul>
        </li>
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
        -->
        <!--untuk menu active link, letakkan class = "current" -->
        <li><a href="#">Company</a> 
            <ul>
                <li><?php echo $this->Html->link('About Us', array('controller'=>'pages','action' => 'about_us'));?></li>
            </ul>
        </li>
        <li><a href="#"><span class="name">Traders</span></a>
            <ul>
                <li><?php echo $this->Html->link('Account Types', array('controller'=>'pages','action' => 'account-types'));?></li>
                <li><?php echo $this->Html->link('Trading Platform', array('controller'=>'pages','action' => 'trading_platform'));?></li>
                <li><?php echo $this->Html->link('Instruments', array('controller'=>'pages','action' => 'instruments'));?></li>
            </ul>
        </li>
        <li>
            <a href="#"><span class="name">Partnership</span></a>
            <ul>
                <li><?php echo $this->Html->link('Master Introducing Brokers (MIB)', array('controller'=>'pages','action' => 'mib'));?></li>
            </ul>
        </li>
        <li>
            <?php echo $this->Html->link('Support Centre', '#');?>
            <ul>
                <li><?php echo $this->Html->link('Support Form', 'http://support.iktrust.com/');?></li>
                <li><?php echo $this->Html->link('Service News', 'http://support.iktrust.com/news');?></li>
                <li><?php echo $this->Html->link('Downloads', 'http://support.iktrust.com/downloads');?></li>
                <li><?php echo $this->Html->link('Knowledgebase (FAQ)', 'http://support.iktrust.com/kb');?></li>
                <li class="last"><?php echo $this->Html->link('Suggestion Form', 'http://support.iktrust.com/feedback');?></li>
            </ul>
        </li>

        <li>
            <?php echo $this->Html->link('Representatives', array('controller'=>'pages','action' => 'representatives'));?>
        </li>

    </ul>
</nav>
