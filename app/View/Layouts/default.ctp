<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$Description = __d('cake_dev', 'IK Trust : Cabinet');
?>
<!DOCTYPE html>
<html>
<head>
	<script language="javascript">
	var urlForJs="<?php echo SITE_URL ?>";
    </script>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $Description ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->Html->css('/usermgmt/css/umstyle.css?q='.QRDN);
	    echo $this->Html->script('/usermgmt/js/jquery-1.7.2.min.js');
	    echo $this->Html->script('/usermgmt/js/umscript.js?q='.QRDN);

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><?php echo $this->Html->link($Description, 'http://iktrust.com'); ?></h1>
		</div>
		<div id="content">
			<div class="messageHolder"><?php echo $this->Session->flash(); ?></div>
			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">

		</div>
	</div>
</body>
</html>
