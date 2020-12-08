<?php 
	$sesion_val = "d-none";
	if (isset($_SESSION['message']) && $_SESSION['message'] === "Error al iniciar sesión") {
		$sesion_val = "alert alert-danger";
		$_SESSION['message'] = "Vacio";
	}
 ?>
<div class="container" >
	<h1 class="font-weight-bold">Mi cuenta</h1>
	<div class="row" >
		<div class="col-lg-4 col-md-6 mb-4"> <!--Div inicio de sesion-->
			<h2 >Iniciar Sesión</h2>
			<form class="px-4 py-3" method="POST" action="<?php echo base_url('index.php/welcome/iniciar_sesion') ?>">
				<div class="<?php echo $sesion_val; ?>" id = "log-in-error">
				  Correo o contraseña incorrecta
				</div>
				<div class="form-grup">
					<label>Dirección de correo electrónico</label>
					<span class="required" title="Obligatorio">*</span>
					<input type="email" name="user" class="form-control" placeholder="ejemplo@micorreo.com" required>
				</div>
				<div class="form-grup">
					<label>Contraseña</label>
					<span class="required" title="Obligatorio">*</span>
					<input type="password" name="pass" class="form-control" required><br>
				</div>
				<div class="form-grup">
					<input class="btn btn-dark btn-block" type="submit" name="iniciar" value="Iniciar" required>
					<div class="form-check">
						<input type="checkbox" name="permanecer" class="form-check-input"> 
						<label class="form-check-label" >Permanecer conectado</label>
					</div>
				</div>
				<div class="form-grup">
					<a href="#" class="textPink">¿Olvidaste tu contraseña?</a>
				</div>
			</form>
		</div>

		<div class="col-lg-4 col-md-6 mb-4">
			<h2>Crear cuenta</h2>
			<form class="px-4 py-3" method="POST" name="formulario" action="<?php echo base_url('index.php/welcome/registrarse_form') ?>">
				<div class="form-grup">
					<label>Dirección de correo electrónico</label>
					<span class="required" title="Obligatorio">*</span>
					<input type="email" name="registro" class="form-control" placeholder="ejemplo@micorreo.com" required>
				</div>
				<div class="form-grup">
					<input class="btn btn-dark btn-block" type="submit" name="iniciar" value="Crear" style="margin-top: 32px">
				</div>
				<div class="form-grup" align="center">
					<a href="<?php echo base_url('assets\estilos\doc/politicas.pdf')?>" class="textPink">Políticas de privacidad</a>
				</div>
			</form>
		</div>
	</div>
</div>



