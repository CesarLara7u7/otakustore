<?php
	/**
	 * 
	 */
	class Persona_Model extends CI_MODEL
	{
		
		public function __construct()
		{
			parent::__construct();
		}
		public function listarPersonas(){
			$consulta=$this->db->get('persona');
			return $consulta->result(); 
		}
		public function listarArticulos(){
			$consulta=$this->db->get('articulo');
			$result=$consulta->result_array();
			return $result;
		}
		public function listarArticulo($dato){
			$this->db->where('tipo',$dato);
			$consulta=$this->db->get('articulo');
			return $consulta->result_array();#result_array
		}

		public function agregarCarrito($id,$cantidad,$usuario){
			$user = $this->db->query("SELECT idPersona from persona where usuario = '".$usuario."' ");
			$user = $user->result_array()[0]['idPersona'];
			if ($this->db->query("SELECT idPersona FROM carrito WHERE idPersona ='".$user."';")->result_array() == NULL){
				$this->db->query("INSERT INTO carrito(idPersona) VALUES(".$user.");");
			}
			$carrito = $this->db->query("SELECT idCarrito FROM carrito WHERE idPersona = '".$user."';");
			$carrito = $carrito->result_array()[0]['idCarrito'];
			if ($this->db->query("SELECT idArticulo FROM itemCarrito WHERE idCarrito ='".$carrito."' AND idArticulo = '".$id."';")->result_array() == NULL) {
				$this->db->query("INSERT INTO itemCarrito(idArticulo, idCarrito, cantidad) VALUES('".$id."', '".$carrito."','".$cantidad."');");
			}else{
				$cantidad_actual = $this->db->query("SELECT cantidad FROM itemCarrito WHERE idCarrito ='".$carrito."' AND idArticulo = '".$id."';")->result_array()[0]['cantidad'];
				$this->db->query("UPDATE itemCarrito SET cantidad = '".($cantidad+$cantidad_actual)."' WHERE idCarrito = '".$carrito."' AND idArticulo = '".$id."';");
			}
				
		}

		public function obtenerCarrito($usuario){
			$user = $this->db->query("SELECT idPersona from persona where usuario = '".$usuario."' ");
			$user = $user->result_array()[0]['idPersona'];
			if ($this->db->query("SELECT idPersona FROM carrito WHERE idPersona ='".$user."';")->result_array() == NULL){
				$this->db->query("INSERT INTO carrito(idPersona) VALUES(".$user.");");
			}
			
			$carrito = $this->db->query('Select * from carrito inner join persona on
			carrito.idPersona = persona.idPersona inner join itemCarrito on
			carrito.idCarrito = itemCarrito.idCarrito inner join articulo on
			itemCarrito.idArticulo = articulo.idArticulo
			where persona.nombre = "'.$usuario.'"');#query("CALL getCarrito(".$user.");");
			return $carrito->result_array();
		}

		public function eliminarDeCarrito($id,$usuario){
			$user = $this->db->query("SELECT idPersona from persona where usuario = '".$usuario."' ;");
			$user = $user->result_array()[0]['idPersona'];
			$carrito = $this->db->query("SELECT idCarrito FROM carrito WHERE idPersona = '".$user."';");
			$carrito = $carrito->result_array()[0]['idCarrito'];
			$this->db->query("DELETE FROM itemCarrito WHERE idCarrito = '".$carrito."' AND idArticulo = '".$id."';");
		}

		public function updateCarrito($id,$usuario,$cantidad){
			$user = $this->db->query("SELECT idPersona from persona where usuario = '".$usuario."' ;");
			$user = $user->result_array()[0]['idPersona'];
			$carrito = $this->db->query("SELECT idCarrito FROM carrito WHERE idPersona = '".$user."';");
			$carrito = $carrito->result_array()[0]['idCarrito'];
			$this->db->query("UPDATE itemCarrito SET cantidad = '".$cantidad."' WHERE idCarrito = '".$carrito."' AND idArticulo = '".$id."';");
		}

		public function registrar($nombre,$mail,$apellidos,$usuario,$contra){
			$consulta=$this->db->query("INSERT INTO persona(nombre, apellidos,email ,password , usuario) VALUES('".$nombre."','".$apellidos."','".$mail."','".$contra."','".$usuario."');");
		}

		public function inicio_s($mail,$pass){
			$consulta=$this->db->query("select usuario from persona where email = '".$mail."';");
			$res = $consulta->result_array();
			if ($res !== NULL) {
				return $res[0]['usuario'];
			}else{
				return NULL;
			}
			
		}

		public function buscarArticulo($dato){
			$this->db->where('idArticulo',$dato);
			$consulta=$this->db->get('articulo');
			return $consulta->result_array();#result_array
		}
		public function listarAnimes(){
			$consulta=$this->db->query('Select * from animes order by animes.anime;'); #query('Select * from articulo inner join animes on articulo.anime = animes.idAnime order by animes.anime;')
			$result=$consulta->result_array();
			return $result;
		}

		public function listarArticuloAnime($dato){
			$this->db->where('idAnime',$dato);
			$consulta=$this->db->get('articulo');
			return $consulta->result_array();#result_array
		}
		public function listarAnime($dato){
			$this->db->where('idAnime',$dato);
			$consulta=$this->db->get('animes');
			return $consulta->result_array();#result_array
		}
	}
?>