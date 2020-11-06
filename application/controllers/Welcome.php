<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Persona_Model');
	}

	public function index()
	{
		$dato['persona']=$this->Persona_Model->listarPersonas();

		$this->load->view('plantillas/header/header');
		$this->load->view('inicio',$dato);
		$this->load->view('plantillas/fooder/fooder');
	}

	public function todo()
	{
		$dato['articulo']=$this->Persona_Model->listarArticulos();
		$this->load->view('plantillas/header/header');
		$this->load->view('todo',$dato);
		$this->load->view('plantillas/fooder/fooder');
	}

	public function buscar()
	{
		$dato=$this->input->POST('buscas');
		$this->load->view('plantillas/header/header');
		$this->load->view('busqueda',$dato);
		$this->load->view('plantillas/fooder/fooder');
	}

	public function login(){
		$this->load->view('plantillas/header/header');
		$this->load->view('login');
		$this->load->view('plantillas/fooder/fooder');
	}

	public function carrito(){
		session_start();
		if (isset($_SESSION['usuario'])) {
			$dato['listaProductos'] = $this->Persona_Model->obtenerCarrito($_SESSION['usuario']);
			$this->load->view('plantillas/header/header');
			$this->load->view('carrito', $dato);
			$this->load->view('plantillas/fooder/fooder');
		}else{
			redirect('Welcome/login');
		}
	}
	public function carrito_add($item,$cant){
		session_start();
		if (isset($_SESSION['usuario'])) {
			$this->Persona_Model->agregarCarrito($item,$cant,$_SESSION['usuario']);
			redirect('Welcome/carrito');
		}else{
			redirect('Welcome/login');
		}
	}

	public function carrito_update(){
		session_start();
		$update = json_decode($_POST['updatejs'],true);
		foreach($update as $key => $value)
			{
			  if ($value['update']) {
			  	$this->Persona_Model->updateCarrito($value['id'],$_SESSION['usuario'],$value['cantidad']);
			  }
			  if ($value['delete']) {
			  	$this->Persona_Model->eliminarDeCarrito($value['id'],$_SESSION['usuario']);
			  }
			}
		redirect('Welcome/carrito');
	}

	public function iniciar_sesion(){
		$mail = $_POST['user'];
		$pass = $_POST['pass'];
		$id = $this->Persona_Model->inicio_s($mail,$pass);
		if ($id !== NULL) {
			session_start([
				'gc_maxlifetime' => 600				
			]);
			$_SESSION['usuario'] = $id;
			$_SESSION['message'] = "Inicio correcto";
			redirect();
		}else{
			session_start();
			$_SESSION['message'] = "Error al iniciar sesión";
			redirect('Welcome/login');
		}
	}

	public function cerrar_sesion(){
		session_start();
		session_destroy();
		redirect();
	}

	public function registrarse_form(){
		$dato['mail'] = $_POST['user'];
		$this->load->view('plantillas/header/header');
		$this->load->view('registro',$dato);
		$this->load->view('plantillas/fooder/fooder');
	}

	public function registro(){
		$this->Persona_Model->registrar($_POST['nombre'],$_POST['mail'],$_POST['apellido'],$_POST['usuario'],$_POST['contra']);
		redirect();
		$this->load->view('plantillas/header/header');
		$this->load->view('login');
		$this->load->view('plantillas/fooder/fooder');
	}

	public function ropa()
	{
		$n=1;
		$dato['articulo']=$this->Persona_Model->listarArticulo(1);
		$this->load->view('plantillas/header/header');
		$this->load->view('ropa',$dato);
		$this->load->view('plantillas/fooder/fooder');

	}
	public function ilustraciones()
	{
		$dato['articulo']=$this->Persona_Model->listarArticulo(2);
		$this->load->view('plantillas/header/header');
		$this->load->view('ilustraciones',$dato);
		$this->load->view('plantillas/fooder/fooder');
	}
	public function coleccionables()
	{
		$dato['articulo']=$this->Persona_Model->listarArticulo(3);
		$this->load->view('plantillas/header/header');
		$this->load->view('coleccionables',$dato);
		$this->load->view('plantillas/fooder/fooder');
	}
	public function otros()
	{
		$dato['articulo']=$this->Persona_Model->listarArticulo(4);
		$this->load->view('plantillas/header/header');
		$this->load->view('otros',$dato);
		$this->load->view('plantillas/fooder/fooder');
	}

	public function animes(){
		$dato['animes']=$this->Persona_Model->listarAnimes();
		$this->load->view('plantillas/header/header');
		$this->load->view('animes',$dato);
		$this->load->view('plantillas/fooder/fooder');
	}
	public function item()
	{
      	$id = $_GET['id'];
		$dato['articulo']=$this->Persona_Model->buscarArticulo($id);
		$dato['id'] = $id;
		$this->load->view('plantillas/header/header');
		$this->load->view('item',$dato);
		$this->load->view('plantillas/fooder/fooder');
	}
}
