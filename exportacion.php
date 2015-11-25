<?php
include_once("inc/header.php");
?>

<div class="container outshadow" data-url="exportacion">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border text-center">
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus beatae, pariatur fuga recusandae commodi ab ut, sapiente ipsa fugit assumenda maxime inventore dolor numquam dolore! Qui a, id error quidem eveniet! Voluptatibus reprehenderit aperiam iure, fuga totam expedita illum, alias excepturi nulla maiores nam non ipsam commodi earum consequuntur, error atque vel magnam laboriosam ratione ipsa obcaecati officiis? Officiis nulla atque explicabo ducimus rem tempore alias, iste vero dicta esse consectetur maxime fugit, debitis mollitia ipsum placeat quidem at commodi, in quaerat. Dicta itaque commodi rerum? Incidunt ullam illum maiores qui, accusamus, doloremque expedita sed veritatis sint impedit rem explicabo.
			</p>

			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et assumenda quia tenetur, dolorem at hic excepturi, officia voluptas animi omnis repudiandae culpa. Iure incidunt consectetur impedit, provident voluptatum totam sunt.
			</p>

			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore perferendis ipsum minus, vero. Ad, nulla.
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
				<img src="http://placekitten.com/1200/350" class="img-responsive" />
			</div>
		</div>
	</div>
</div>

<?php
include_once("inc/footer.php");
?>