<?php
include_once("inc/header.php");
?>

<div class="container outshadow" data-url="exportacion">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border text-center">
			<p>
				Hola como ests que tal ha ido todo ? Hola como ests que tal ha ido todo ? Hola como ests que tal ha ido todo ? Hola como ests que tal ha ido todo ? Hola como ests que tal ha ido todo ? Hola como ests que tal ha ido todo ? Hola como ests que tal ha ido todo ? Hola como ests que tal ha ido todo ? Hola como 
			</p>

			<p>
				sts que tal ha ido todo ? Hola como ests que tal ha ido todo ? Hola como ests que tal ha ido todo ? Hola como ests que tal ha ido todo ? Hola como ests que tal ha ido todo ? Hola como ests que tal ha ido todo ? Hola como ests que tal ha ido todo ? Hola como ests que tal ha ido todo ? Hola como ests que tal ha ido todo ? Hola como ests que tal ha ido todo ? Hola como ests que tal ha ido todo ? 
			</p>

			<p>
				ests que tal ha ido todo ? Hola como ests que tal ha ido todo ? Hola como ests que tal ha ido todo ? Hola como ests que tal ha ido todo ? Hola como ests que tal ha ido todo ? Hola como ests que tal ha ido todo ? Hola como ests que tal ha ido todo ? Hola como ests que tal ha ido todo ? Hola como ests que tal ha ido todo ? Hola como ests que tal ha ido todo ? Hola como ests que tal ha ido todo ? Hola como ests que tal ha ido todo ? Hola como ests que tal ha ido todo ? Hola como ests que tal ha ido todo ? Hola como ests que tal ha ido todo ? Hola como ests que tal ha ido todo ? Hola como e	
			</p>			
		</div>
	</div>

	<div class="row">
		<h4 class="text-center">Nuestro portafolio de exportacion incluye:</h4>
		<div class="links-container text-center">
			<?php
				$link = array('maiz gigante', 'papas nativas', 'mix chips', 'yuca chips', 'habas', 'cancha', 'chiffle', 'fruto secos', 'camote (batata)', 'veggie chips', 'chiffles dulces', 'especies');

				foreach($link as $label){
					if(end($link) == $label){
						echo "<a href='#!'>".$label."</a>";
					}else{
						echo "<a href='#!'>".$label." - </a>";
					}
				}
			?>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="row">
				<img src="http://placehold.it/1200x350" class="img-responsive" />
			</div>
		</div>
	</div>
</div>

<?php
include_once("inc/footer.php");
?>