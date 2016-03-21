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
		// echo $this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('font-awesome.min');
		echo $this->Html->css('main');
 
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');

	?>

    <script type="text/javascript" src="https://cdn.datatables.net/t/bs-3.3.6/jq-2.2.0,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.11,b-1.1.2,b-colvis-1.1.2,b-flash-1.1.2,b-print-1.1.2,cr-1.3.1,r-2.0.2,sc-1.4.1,se-1.1.2/datatables.min.js"></script>
</head>
<?= $this->element('header'); ?>
<body>
	<!-- If page is home -->
	<?php if(empty($this->params->url)){ ?>
		<div id="headerwrap">
			<div class="container">
				<div class="row centered">
					<div class="col-lg-8 col-lg-offset-2">
					<h1>Simply made for <b>Sport</b><br>by sportaddicts</h1>
					<h2 style="font-size:28px;">Congard Lepère Locchi Ravenel</h2>
					</div>
				</div><!-- row -->
			</div><!-- container -->
		</div><!-- headerwrap -->
	<?php } ?>

	<div class="container w">
<!-- 		<div id="header">
			<h1><?php echo $this->fetch('title'); ?></h1>
		</div> -->
		<?php echo $this->Flash->render(); ?>
		<?php echo $this->fetch('content'); ?>

	</div>


	<?php if(empty($this->params->url)){ ?>

	<!-- PORTFOLIO SECTION -->
	<div id="dg">
		<div class="container">
			<div class="row centered">
				<h4>LATEST WORKS</h4>
				<br>
				<div class="col-lg-4">
					<div class="tilt">
					<a href="#"><?= $this->Html->image('p01.png', array('alt' => 'img')) ?></a>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="tilt">
					<a href="#"><?= $this->Html->image('p03.png', array('alt' => 'img')) ?></a>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="tilt">
					<a href="#"><?= $this->Html->image('p02.png', array('alt' => 'img')) ?></a>
					</div>
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- DG -->


	<!-- FEATURE SECTION -->
	<div class="container wb">
		<div class="row centered">
			<br><br>
			<div class="col-lg-8 col-lg-offset-2">
				<h4>WE CREATE FIRST CLASS DESIGN</h4>
				<p>By being true to the brand we represent, we elevate the audiences’ relationship to it. Like becomes love becomes a passion. Passion becomes advocacy. And we see the brand blossom from within, creating a whole story the audience embraces. That’s when the brand can truly flex its muscles.</p>
			<p><br/><br/></p>
			</div>
			<div class="col-lg-2"></div>
			<div class="col-lg-10 col-lg-offset-1">
				<?= $this->Html->image('munter.png', array('alt' => 'Responsive image', 'class' => 'img-responsive')) ?>
			</div>
		</div><!-- row -->
	</div><!-- container -->

	<?php } ?>
	
	<div style="background-color:#CE4D47; color:white; padding:20px;">
		<div class="container">
			<div class="row centered">
				<?php echo $this->element('sql_dump'); ?>
			</div>
		</div>
	</div>

</body>
<?= $this->element('footer'); ?>
</html>

<script>

$(document).ready( function () {
    $('#datatable').DataTable();
} );

</script>