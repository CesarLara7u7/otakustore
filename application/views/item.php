
<script type="text/javascript">
		
</script>

<div class="container">
<div class="row">
	<div class="col-lg-6">
		<div class="owl-carousel hero-slide owl-style owl-loaded owl-drag">

		<div class="owl-stage-outer">
			<div class="owl-stage" >
				<div class="owl-item cloned"> 

					<img src="<?php echo base_url().$articulo[0]['foto'];?>" title="<?php echo base_url().$articulo[0]['articulo']?>" class="img-fluid">

				</div>
				
			</div>
		</div>
	</div>

</div>
<div class="col-lg-5 ml-auto">
<h2 class="text-black"><?php echo $articulo[0]['articulo']?></h2>
<p class="textPink h4">
	$<?php echo $articulo[0]["precio"]?>
</p>
<p>
	<?php echo $articulo[0]["descripcion"]?>
</p>

<script type="text/javascript">
var capnum = 1;
$(document).ready(function(){
	$('#cantidad').change(function(){
		change_link();
	});

});

function plus(){
     capnum++;
     document.getElementById('cantidad').value = capnum;
     change_link();
}

function change_link(){
	var new_link = "s";
	new_link = "<?php echo base_url('index.php/Welcome/carrito_add/'.$id)?>";
	new_link = new_link + "/" +document.getElementById('cantidad').value;
	document.getElementById("carrito_enviar").setAttribute("href",new_link);
}

function minus(){
	if (capnum > 1)
	capnum--;
     document.getElementById('cantidad').value = capnum;
     change_link();
}
</script>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <button class="btn btn-outline-secondary" type="button" onclick="minus()">-</button>
  </div>
  <input type="text" class="form-control" id = "cantidad" value="1" style="text-align: center" >
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="button" onclick="plus()">+</button>
  </div>
</div>
<p align="center"><a href="<?php echo base_url('index.php/Welcome/carrito_add/'.$id.'/1'); ?> " id = 'carrito_enviar' class=" btn  height-auto py-3 btn-outline-pink px-0 "><img width="20%" src="<?php echo base_url('assets\estilos\img/carrito+.png')?>"></a></p>
</div>
</div>
</div>