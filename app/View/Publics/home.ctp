
		<div id="wrapper">
			<div id="carousel">
                <div>
                    <img src="<?= WWW_ROOT.'img'.DS.'default.jpg'; ?>" width="150" height="150" alt="clem@ment.pas">
                    <span> numerobis@ece.fr </span>
                </div>

<?php			foreach($members as $id => $email){
                if(file_exists(WWW_ROOT."img".DS.$id.".png"))
                {
                $image = $id.".png";
                }
                else{

                $image = "default.jpg";

                }
                ?>
                <div>
                    <?php echo $this->Html->image($image, array('width'=>'150','height'=>'150', 'alt'=>$email)); ?>
                    <span> <?php echo $email; ?> </span>
                </div>

<?php
		}?>

				</div>
			</div>
		</div>

<div class="container w" style="margin-top:20px;margin-bottom:20px;">
<div class="row centered">
	<br><br>
	<div class="col-lg-4">
		<i class="fa fa-heart"></i>
		<h4>QUI SOMMES-NOUS ?</h4>
		<p>Ce site web a pour objectif d'assurer la gestion des activités des membres du cercle sportif OCRES.</p>
	</div><!-- col-lg-4 -->

	<div class="col-lg-4">
		<i class="fa fa-laptop"></i>
		<h4>SERVICES</h4>
		<p>En accédant à <?php if($authUser){ echo $this->Html->link('votre espace personnel', '/accounts/myprofile'); }else{ echo 'votre espace personnel'; }?>, vous aurez la possibilité de <?php if($authUser){ echo $this->Html->link('consulter les séances', '/accounts/myworkouts'); }else{ echo 'consulter les séances'; }?> auxquelles vous êtes inscrit(e), <?php if($authUser){ echo $this->Html->link('proposer vos propres workouts', '/accounts/addworkout'); }else{ echo 'proposer vos propres workouts'; }?> ou encore <?php if($authUser){ echo $this->Html->link('ajouter vos différents objets connectés', '/accounts/adddevice'); }else{ echo 'ajouter vos différents objets connectés'; }?> dédiés au sport.</p>
	</div><!-- col-lg-4 -->

	<div class="col-lg-4">
		<i class="fa fa-trophy"></i>
		<h4>MON COMPTE</h4>
		<p>Si vous n'avez pas encore de compte, nous vous invitons à accéder à la <?php echo $this->Html->link('page', '/members/create');?> de création de profil :)</p>
	</div><!-- col-lg-4 -->
</div><!-- row -->
</div>

		<?php echo $this->Html->script('jquery.carouFredSel-6.0.4-packed'); ?>

		<script type="text/javascript">
			$(function() {

				var $c = $('#carousel'),
					$w = $(window);

				$c.carouFredSel({
					align: false,
					items: 10,
					scroll: {
						items: 1,
						duration: 2000,
						timeoutDuration: 0,
						easing: 'linear',
						pauseOnHover: 'immediate'
					}
				});


				$w.bind('resize.example', function() {
					var nw = $w.width();
					if (nw < 990) {
						nw = 990;
					}

					$c.width(nw * 3);
					$c.parent().width(nw);

				}).trigger('resize.example');

			});
		</script>
		<style type="text/css">

			/*#wrapper {
				border-top: 1px solid #ccc;
				width: 100%;
				height: 50%;
				margin-top: -1px;
				position: absolute;
				left: 0;
				top: 50%;

			}*/
			#carousel div {
				text-align: center;
				width: 150px;
				height: 200px;
				float: left;
				position: relative;
			}
			#carousel div img {
				border: none;
			}
			#carousel div span {
				display: none;
			}
			#carousel div:hover span {
				background-color: #333;
				color: #fff;
				font-family: Arial, Geneva, SunSans-Regular, sans-serif;
				font-size: 14px;
				line-height: 22px;
				display: inline-block;
				width: 100px;
				padding: 2px 0;
				margin: 0 0 0 -50px;
				position: absolute;
				bottom: 30px;
				left: 50%;
				border-radius: 3px;
			}

			#donate-spacer {
				height: 100%;
			}
			#donate {
				width: 750px;
				padding: 50px 75px;
				margin: 0 auto;
				overflow: hidden;
			}
			#donate p, #donate form {
				margin: 0;
				float: left;
			}
			#donate p {
				width: 650px;
			}
			#donate form {
				width: 100px;
			}
		</style>



