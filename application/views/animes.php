<div class="container">
	<ul class="list-group">
		<?php
		for ($i = 0; $i < $r = count($animes); $i++) {
			$aux=$i+1;
		?>
			<h3><a href="<?php echo base_url('index.php/Welcome/itemanime/.php?id=') . $animes[$i]["idAnime"]; ?>"><li class="list-group-item"><?php echo $animes[$i]['anime'] ?></li></h3>
			<div class="">
				<div class="card h-100">
					<div class="col-lg-3 col-md-4 col-6 product-block">
						<div class="main-category-image ">
							<div class="cardimg crop" align="center">
								<a href="<?php echo base_url('index.php/Welcome/itemanime/.php?id=') . $animes[$i]["idAnime"]; ?>"><img class="card-img  card-deck img-portfolio img-hover mb-3" src="<?php echo base_url() . $animes[$i]["fotoa"] ?>" /></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		<?php }	 ?>
	</ul>
</div>