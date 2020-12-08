
<script type="text/javascript">
$(document).ready(function(){
	$('#user').change(function(){
		var usu =  document.getElementById('user');
		if (/^[a-zA-Z0-9-,_]*$/.test(usu.value) && usu.value !== "") {
			usu.className = "form-control is-valid";
		}else{
			usu.className = "form-control is-invalid";
		}	
	});
	$('#nombre').change(function(){
		var nom =  document.getElementById('nombre');
		if ( nom.value !== "") {
			nom.className = "form-control is-valid";
		}else{
			nom.className = "form-control is-invalid";
		}	
	});
	$('#apellido').change(function(){
		var ape =  document.getElementById('apellido');
		if ( ape.value !== "") {
			ape.className = "form-control is-valid";
		}else{
			ape.className = "form-control is-invalid";
		}	
	});
	$('#pass').change(function(){
		var cont = document.getElementById('pass');
		if ((/[A-z]/).test(cont.value) && (/[A-Z]/).test(cont.value) && /[0-9]/.test(cont.value) && /^[a-zA-Z0-9-,_]*$/.test(cont.value) && cont.value.length >= 8 &&  cont.value.length <= 10){
			cont.setAttribute("class", "form-control is-valid");
		}else{
			cont.setAttribute("class", "form-control is-invalid");
		}
	});

	$('#pass2').change(function(){
		var cont1 = document.getElementById('pass');
		var cont2 = document.getElementById('pass2');

		if (cont1.value == cont2.value){
			cont2.setAttribute("class", "form-control is-valid");
		}else{
			cont2.setAttribute("class", "form-control is-invalid");
		}
	});

	document.getElementById('registro').onsubmit = function() {
    	return isValidForm();
	};
	console.log($('#pass'));
});
function isValidForm(){
	var usu = document.getElementById('user');
				   	
	var cont = document.getElementById('pass');

	var cont_ver = document.getElementById('pass2'); 


	if (/^[a-zA-Z0-9-,_]*$/.test(usu.value) && usu.value !== "") {
		usu.className = "form-control is-valid";
	}else{
		usu.className = "form-control is-invalid";
	}	

	if ((/[A-z]/).test(cont.value) && /[0-9]/.test(cont.value) && /^[a-zA-Z0-9-,_]*$/.test(cont.value) && cont.value.length >= 8 &&  cont.value.length <= 10){
		cont.setAttribute("class", "form-control is-valid");
	}else{
		cont.setAttribute("class", "form-control is-invalid");
	}
	
	if (document.getElementsByClassName('form-control is-invalid').length !==0) {
		return false;
	}

	if (cont.value == cont_ver.value){
		cont_ver.setAttribute("class", "form-control is-valid");
	}else{
		cont_ver.setAttribute("class", "form-control is-invalid");
	}

	var nom =  document.getElementById('nombre');
	if ( nom.value !== "") {
		nom.className = "form-control is-valid";
	}else{
		nom.className = "form-control is-invalid";
	}	

	var ape =  document.getElementById('apellido');
	if ( ape.value !== "") {
		ape.className = "form-control is-valid";
	}else{
		ape.className = "form-control is-invalid";
	}	

	return true;
}


</script>

<div class="container" >
	<h1 class="font-weight-bold">¡Termina tu cuenta!</h1>
	<form class="px-4 py-3 needs-validation" method="POST" action="<?php echo base_url('index.php/welcome/registro') ?>" onsubmit="return isValidForm()" id="registro">
	<div class="row" >
		<div class="col-lg-4 col-md-6 mb-4">
			<div class="form-grup">
				<label>Nombre</label>
				<span class="required" title="Obligatorio">*</span>
				<input type="text" name="nombre" id="nombre" class="form-control" >
			</div>
			
		</div>
		<div class="col-lg-4 col-md-6 mb-4">
			<div class="form-grup">
				<label>Apellido(s)</label>
				<span class="required" title="Obligatorio">*</span>
				<input type="text" name="apellido" id = "apellido" class="form-control" >
			</div>
		</div>
	</div>
	<div class="row">
		<div class=" col-md-8">
			<div class="form-grup">
				<label>Usuario</label>
					<span class="required" title="Obligatorio">*</span>
				<input type="text" name="usuario" id="user" class="form-control" >
			</div>
		</div>
	</div>
	<div class="row">
		<div class=" col-md-8">
			<div class="form-grup">
				<label>Contraseña</label>
					<span class="required" title="Obligatorio">*</span>
					<input type="password" class="form-control" name="contra" id="pass" placeholder="Password" >
					<small id="passwordHelpBlock" class="form-text text-muted">
					  Tu contraseña debe tener entre 8 a 10 caracteres, contener numeros y letras, y no debe contener espacios, caracteners especiales, o emojis.
					</small>
					<div class="invalid-feedback">
						Contraseña invalida
					</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class=" col-md-8">
			<div class="form-grup">
				<label>Confirmar contraseña</label>
					<span class="required" title="Obligatorio">*</span>
					<input type="password" class="form-control " id="pass2" placeholder="Password" >
					<div class="invalid-feedback">
						La contraseña no coincide
					</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-8">
			<div class="form-grup" align="center">
				<input type="hidden" name="mail" value="<?php echo $_POST['registro'] ?>">
				<input class="btn btn-dark btn-block" type="submit" name="iniciar" value="Crear" style="margin-top: 32px" >
			</div>
		</div>
	</div>

	</form>
</div>

