
<?php //echo "<script type='text/javascript'> console.log('".$_SESSION['usuario'].session_get_cookie_params()['lifetime']."');</script>"; session_destroy();?>
<div class="container">

    <div class="row ">

      <div class="col-lg-9">

        <!--
INICIO DEL CARRUSEL
-->
      <div id="carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel" data-slide-to="0" class="active"></li>
          <li data-target="#carousel" data-slide-to="1"></li>
          <li data-target="#carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block img-fluid" src="assets/estilos/img/camisa2.png" alt="Darling in the Franxx – Zero Two 3D Printed Black T-Shirt">
            <div class="carousel-caption d-none d-md-block">
              <a href="<?php echo base_url('index.php/Welcome/item/.php?id=3')?>" style="color: white; text-decoration: none;"><h5>Darling in the Franxx – Zero Two 3D Printed Black T-Shirtx</h5></a>
              <p>$38.00</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="assets/estilos/img/camisa1.png" alt="Ahegao">
            <div class="carousel-caption d-none d-md-block">
              <a href="<?php echo base_url('index.php/Welcome/item/.php?id=2')?>" style="color: white; text-decoration: none;"><h5>Ahegao</h5></a>
              <p>$18.99</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="assets/estilos/img/neso1.png" alt="Fate / stay night mega jumbo Nesoberi Plush Saber Alter SEGA Stuffed Doll JAPAN">
            <div class="carousel-caption d-none d-md-block">
              <a href="<?php echo base_url('index.php/Welcome/item/.php?id=5')?>" style="color: white; text-decoration: none;"><h5>Fate / stay night mega jumbo Nesoberi Plush Saber Alter SEGA Stuffed Doll JAPAN</h5></a>
              <p>$64.00</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
     <!--
FIN DEL CARRUSEL
-->

        <div class="container">
          <h1 class="site-heading text-center  text-body d-none d-lg-block">Top de ventas</h1>
          <hr><br>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="<?php echo base_url('index.php/Welcome/item/.php?id=8')?>"><img class="card-img-top" src="assets/estilos/img/sudadera2.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="<?php echo base_url('index.php/Welcome/item/.php?id=8')?>" class="textBlack">Himouto! Umaru-chan-Zip-up Hoodle</a>
                </h4>
                <h5 class="textPink">$54.00</h5>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="<?php echo base_url('index.php/Welcome/item/.php?id=1')?>"><img class="card-img-top" src="assets/estilos/img/1.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="<?php echo base_url('index.php/Welcome/item/.php?id=1')?>" class="textBlack">Love Live! Sunshine!! MegaJumbo Nesoberi Plush Doll</a>
                </h4>
                <h5 class="textPink">$300</h5>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9734; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="<?php echo base_url('index.php/Welcome/item/.php?id=6')?>"><img class="card-img-top" src="assets/estilos/img/neso2.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="<?php echo base_url('index.php/Welcome/item/.php?id=6')?>" class="textBlack">Re: Zero Starting Life MJ Nesoberi Stuffed Plush REM</a>
                </h4>
                <h5 class="textPink">$37.92</h5>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
              </div>
            </div>
          </div>

          

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

