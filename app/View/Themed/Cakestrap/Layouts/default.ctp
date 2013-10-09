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

$cakeDescription = __d('cake_dev', 'Straits Tutors');
?>
<?php echo $this->Html->docType('html5'); ?> 
<html>
	<head>
		<?php echo $this->Html->charset(); ?>
		<title>
			<?php echo $cakeDescription ?>:
			<?php echo $title_for_layout; ?>
		</title>
		<?php
			echo $this->Html->meta('icon');
			
			echo $this->fetch('meta');

			echo $this->Html->css('bootstrap.min');
            echo $this->Html->css('bootstrap-editable');
			// Uncomment this to enable the bootstrap gradient theme (Flat is way better though).
			//echo $this->Html->css('bootstrap-theme.min');
			echo $this->Html->css('core');
            echo $this->Html->css('style');
			echo $this->fetch('css');

			echo $this->Html->script('libs/jquery-1.10.2.min');
			echo $this->Html->script('libs/bootstrap.min');
            echo $this->Html->script('libs/bootstrap-editable.js');
            echo sprintf('<script type="text/javascript" src="%s%s"></script>', $this->webroot, 'Home/getJSConfig');
			echo $this->fetch('script');
		?>
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	</head>

	<body>

		<div id="main-container">

            <?php echo $this->element('menu/top_menu'); ?>

			<div id="content" class="container">
                <?php echo $this->fetch('content'); ?>
			</div><!-- /#header .container -->


            <hr>

			<div id="footer" class="container">
				<p>Copyright &copy; 2013 | Straits Tutors, Singapore All Rights Reserved</p>
			</div><!-- /#footer .container -->
			
		</div><!-- /#main-container -->
		
		<div class="container" style="display:none">
			<div class="well well-sm">
				<small>
					<?php echo $this->element('sql_dump'); ?>
				</small>
			</div><!-- /.well well-sm -->
		</div><!-- /.container -->
		
	</body>

</html>