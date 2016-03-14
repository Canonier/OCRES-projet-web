<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
        echo $this->Html->css('database.plugin');
		echo $this->Html->css('cake.generic');
 
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');

	?>

    <script type="text/javascript" src="https://cdn.datatables.net/t/bs-3.3.6/jq-2.2.0,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.11,b-1.1.2,b-colvis-1.1.2,b-flash-1.1.2,b-print-1.1.2,cr-1.3.1,r-2.0.2,sc-1.4.1,se-1.1.2/datatables.min.js"></script>
</head>
<?= $this->element('header'); ?>
<body>
	<div id="container">
		<div id="header">
			<h1><?php echo $this->fetch('title'); ?></h1>
		</div>
		<div id="content">

			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
				);
			?>
			<p>
				<?php echo $cakeVersion; ?>
			</p>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
<?= $this->element('footer'); ?>
</html>
