<div class="container">
<div class="row">
    <div class="col-6">
      <span class="h2"><strong>Ilustraciones</strong></span>
    </div>

    
  </div>


<div class="row">
  <?php 
    $r=count($articulo);
    for ($i=0; $i <$r ; $i++) { 
      
  ?>

  <div class="col-lg-3 col-md-4 col-6 product-block">
    <div class="main-category-image ">
      <div class="cardimg crop" align="center">
        <a href="<?php echo base_url('index.php/Welcome/item/.php?id=').$articulo[$i]["idArticulo"];?>"><img class="card-img  card-deck img-portfolio img-hover mb-3" src="<?php echo base_url().$articulo[$i]["foto"]?>" /></a>
      </div>
      

      <div class="caption">
        <h3><a href="<?php echo base_url('index.php/Welcome/item/.php?id=').$articulo[$i]["idArticulo"];?>"><?php echo $articulo[$i]["articulo"]?></a></h3>
          <div class="price-mob textPink">


          $<?php echo $articulo[$i]["precio"]?>


          </div>
          <div class="clearfix"></div>
            <p class="product-block-description d-none d-md-block">



            <?php echo $articulo[$i]["descripcion"]?>


            </p>
          </div>

        </div>
      </div>
    <?php }
      ?>
      


</div>
</div>