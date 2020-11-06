<div class="container">
<ul class="list-group">
	<?php 
	for ($i=0; $i < $r=count($animes); $i++) {
	 ?>
	<li class="list-group-item"><?php echo $animes[$i]['anime'] ?></li>
	<?php }	 ?>
</ul>
</div>