<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>OtakuStore</title>
	<link rel="stylesheet" text="text/css" href="assets/estilos/vendor/bootstrap/css/bootstrap.css">
  <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">-->
  <script src="assets/estilos/vendor/bootstrap/js/bootstrap.min.js"></script>  
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

	<?php  
    if (session_status() != 2) {
      session_start();
    }
    $perfil = ('assets\estilos\img/perfil.png');
    if (isset($_SESSION['usuario'])) {
      $perfil = ('assets\estilos\img/perfil_iniciado.png');
    }


  ?>
	<link rel="shortcut icon" type="image/ico" href="assets\estilos\img\Logo.ico"/>

</head>
<body >
<?php // <div>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>?>

	<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
    <div class="collapse container navbar-collapse">
      <a class="navbar-brand" href="index.php"><img src="assets\estilos\img/Logo.png" width="80" height="80"
title="OtakuStore"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Categorias" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="Categorias">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <?php // Revisar Busqueda?>
            <form method="POST" action = "index.php/Welcome/buscar" >
              <input class="form-control" type="text" name="buscar" placeholder="Buscar" disabled title="En mantenimento">
          </li>
          <li class="nav-item active">
              <input class="nav-link" type="image" src="assets/estilos/img/buscar.png" name="buscas" width="50" height="50" disabled title="En mantenimento">
            </form>

          <li class="nav-item active">
            <a class="nav-link" href="'index.php">Inicio
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item active" >
            <a class="nav-link" href="index.php/Welcome/animes">Animes   <img src="assets\estilos\img/tres.png" width="14" height="14" ></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="index.php/Welcome/carrito"><img src="assets\estilos\img/carrito.png" width="40" height="40" title="Tu carrito"></a>
          </li>
          <li class="nav-item">
            <div class="dropdown">
              <button class="btn" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="<?php echo $perfil?>" width="40" height="40" title="Perfil">
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <?php 
                  if (isset($_SESSION['usuario'])) {
                    echo "<label class='dropdown-header'>".$_SESSION['usuario']."</label>";
                    echo "<div class='dropdown-divider'></div>";
                    echo "<a href='' class='dropdown-item btn'>Mi perfil</a>";
                    echo "<a href='' class='dropdown-item btn'>Lista de deseados</a>";
                    echo "<a href='".base_url('index.php/Welcome/cerrar_sesion')."' class='dropdown-item btn'>Cerrar sesíon</a>";
                  }else{
                    echo "<label class = 'dropdown-item-text'>¡Aun no inicias sesión!</label>";
                    echo "<label class = 'dropdown-item-text'>Inicia sesión o registrate <a href = '".base_url('index.php/Welcome/login')."' style = 'color: pink;'>aquí</a></label>";
                  }
                 ?>
              </div>
            </div>
            <!--<a class="nav-link" href="index.php/Welcome/login"></a> -->
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <nav class="navbar navbar-expand-lg navbar-dark bg-pink">
    <div class="container">
      <a class="navbar-brand" href="index.php/Welcome/todo">Todos los productos</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navegacion" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="Navegacion">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php/Welcome/ropa">Ropa
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="index.php/Welcome/ilustraciones">Ilustraciones</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="index.php/Welcome/coleccionables">Coleccionables</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="index.php/Welcome/otros">Otros</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
