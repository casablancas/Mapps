<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {



	function __construct(){
		parent::__construct();
		$this->load->model('modelo');
		$this->load->helper(array('url'));
		$this->load->library('googlemaps');
	}

	public function index()
	{
		$this->cargarMapaInternauta();
	}

	public function indexAuth()
	{
		$this->cargarMapaAuth();
	}

	public function indexAdmin()
	{
		$this->cargarMapaAdmin();
	}

	public function login()
	{
		$this->load->view('header');
		$this->load->view('barInternauta');
		$this->load->view('login');
		$this->load->view('footer');	
	}

	public function logueo()
	{
		$usuario = $_POST["usuario"];
		$contraseña = $_POST["password"];

		$id = $this->modelo->logueo($usuario,$contraseña);

		if($usuario=="admin" && $contraseña=="1234"){
			//$this->load->view('');
			$this->indexAdmin();
		}elseif($id != FALSE){
			$this->cargarMapaAuth();
		}else{
			$this->load->view('header');
			$this->load->view('error');
			$this->load->view('footer');
		}
	}

	public function agregarDepto()
	{
		$this->load->view('header');
		$this->load->view('bar2');
		$this->load->view('nuevoDepto');
		$this->load->view('footer');
		
	}

	public function adminDepto()
	{
		$data['deptos'] = $this->modelo->departamentos();
		$this->load->view('header');
		$this->load->view('barAdmin');
		$this->load->view('adminDeptos', $data);
		$this->load->view('footer');
	}


	public function nuevoDepto()
	{
		$latitud = $_POST["latitud"];
		$longitud = $_POST["longitud"];
		$precio = $_POST["precio"];
		$agua = 0;
		$telefono = 0;
		$luz = 0;
		$gas = 0;
		$internet = 0;

		foreach($_POST['servicios'] as $j){
			switch ($j) {
				case 'Agua':
					$agua = 1;
					break;
				case 'Telefono':
					$telefono = 1;
					break;
				case 'Luz':
					$luz = 1;
					break;
				case 'Gas':
					$gas = 1;
					break;
				case 'Internet':
					$internet = 1;
					break;
				default:
					break;
			}
		}

		//echo $latitud.', '.$longitud.','.$precio.','.$servicios;

		$d = $this->modelo->agregarDepto($latitud, $longitud, $precio, $agua, $luz, $telefono, $gas, $internet);
		if($d == 1){
			$this->exito();
		}
		else
		{
			$this->error();
		}
	}

	public function nuevaPersona(){

		$nombre = $_POST["nombre"];
		$apellido = $_POST["apellido"];
		$tel = $_POST["tel"];
		$correo = $_POST["correo"];
		$tipo = 0;
		$usuario = $_POST["usuario"];
		$password = $_POST["password"];

		$d = $this->modelo->agregarUsuario($nombre, $apellido, $tel, $correo, $tipo, $usuario, $password);

		if($d == 1){
			$this->exito();
		}
		else
		{
			$this->error();
		}
	}

	public function cargarMapaInternauta()
	{
			//Lat,Lon CU: 19.002676, -98.203358
			$config['center'] = '18.976895, -98.235857';
 			$config['zoom'] = 'auto';
 			//$config['onclick'] = 'createMarker_map({ map: map, position:event.latLng });';
 			$this->googlemaps->initialize($config);
 			$marker = array();

 			$d = $this->modelo->departamentos();
 			foreach($d->result() as $row)
	  		{
	  			$marker['position'] = $row->latitud.', '.$row->longitud;
	  			//Cachamos el evento del click sobre el marker para abrir otra vista
	  			$marker['onclick'] = 'window.open("index.php?/Welcome/depto/'.$row->iddpto.'","_self")';
	  			$this->googlemaps->add_marker($marker);
	  		}

 			$data['map'] = $this->googlemaps->create_map();
 			
			$this->load->view('header');
			$this->load->view('bar');
			$this->load->view('marker', $data);
			$this->load->view('footer');
	}

	public function cargarMapaAuth()
	{
			$config['center'] = '18.976895, -98.235857';
 			$config['zoom'] = 'auto';
 			//$config['onclick'] = 'createMarker_map({ map: map, position:event.latLng });';
 			$this->googlemaps->initialize($config);
 			$marker = array();

 			$d = $this->modelo->departamentos();
 			foreach($d->result() as $row)
	  		{
	  			$marker['position'] = $row->latitud.', '.$row->longitud;
	  			//Cachamos el evento del click sobre el marker para abrir otra vista
	  			$marker['onclick'] = 'window.open("index.php?/Welcome/deptoAuth/'.$row->iddpto.'","_self")';
	  			$this->googlemaps->add_marker($marker);
	  		}

 			$data['map'] = $this->googlemaps->create_map();
 			
			$this->load->view('header');
			$this->load->view('bar2');
			$this->load->view('marker', $data);
			$this->load->view('footer');
	}

	public function cargarMapaAdmin()
	{
			$config['center'] = '18.976895, -98.235857';
 			$config['zoom'] = 'auto';
 			//$config['onclick'] = 'createMarker_map({ map: map, position:event.latLng });';
 			$this->googlemaps->initialize($config);
 			$marker = array();

 			$d = $this->modelo->departamentos();
 			foreach($d->result() as $row)
	  		{
	  			$marker['position'] = $row->latitud.', '.$row->longitud;
	  			//Cachamos el evento del click sobre el marker para abrir otra vista
	  			$marker['onclick'] = 'window.open("index.php?/Welcome/deptoAuth/'.$row->iddpto.'","_self")';
	  			$this->googlemaps->add_marker($marker);
	  		}

 			$data['map'] = $this->googlemaps->create_map();
 			
			$this->load->view('header');
			$this->load->view('barAdmin');
			$this->load->view('marker', $data);
			$this->load->view('footer');
	}

	public function error(){
		$this->load->view('header');
		$this->load->view('bar');
		$this->load->view('error');
		$this->load->view('footer');
	}

	public function exito(){
		$this->load->view('header');
		$this->load->view('bar');
		$this->load->view('exito');
		$this->load->view('footer');
	}

	public function registroUsuario(){
		$this->load->view('header');
		$this->load->view('barInternauta');
		$this->load->view('registroUsuario');
		$this->load->view('footer');

	}

	public function depto()
	{
		$id=$this->uri->segment(3);	
		$depto = $this->modelo->depto($id);
		$data;
		foreach($depto->result() as $row)
		{
			$data['latitud'] = $row->latitud;
			$data['longitud'] = $row->longitud;
			$data['precio'] = $row->precio;
			$data['agua'] = $row->agua;
			$data['luz'] = $row->luz;
			$data['tel'] = $row->tel;
			$data['internet'] = $row->internet;
			$data['gas'] = $row->gas;

		}
		$this->load->view('header');
		$this->load->view('bar');
		$this->load->view('depto', $data);
		$this->load->view('footer');
	}

	public function deptoAuth()
	{
		$id=$this->uri->segment(3);	
		$depto = $this->modelo->depto($id);
		$data;
		foreach($depto->result() as $row)
		{
			$data['latitud'] = $row->latitud;
			$data['longitud'] = $row->longitud;
			$data['precio'] = $row->precio;
			$data['agua'] = $row->agua;
			$data['luz'] = $row->luz;
			$data['tel'] = $row->tel;
			$data['internet'] = $row->internet;
			$data['gas'] = $row->gas;

		}
		$this->load->view('header');
		$this->load->view('bar2');
		$this->load->view('deptoAuth', $data);
		$this->load->view('footer');
	}

	public function eliminar()
	{
		$id = $this->uri->segment(3);
		$res = $this->modelo->eliminar($id);
		if($res != false)
		{
			$this->load->view('header');
			$this->load->view('exitoCambios');
			$this->load->view('footer');
		}else{
			$this->load->view('header');
			$this->load->view('errorCambios');
			$this->load->view('footer');
		}
	}

	public function modificar()
	{
		$id = $this->uri->segment(3);
		$depto = $this->modelo->depto($id);
		$data;
		foreach($depto->result() as $row)
		{
			$data['id'] = $row->iddpto;
			$data['latitud'] = $row->latitud;
			$data['longitud'] = $row->longitud;
			$data['precio'] = $row->precio;
			$data['agua'] = $row->agua;
			$data['luz'] = $row->luz;
			$data['tel'] = $row->tel;
			$data['internet'] = $row->internet;
			$data['gas'] = $row->gas;
		}


		$this->load->view('header');
		$this->load->view('barAdmin');
		$this->load->view('modificarDepto', $data);
		$this->load->view('footer');

	}

	public function modificarDepto()
	{
		$id = $_POST['id'];
		$latitud = $_POST['latitud'];
		$longitud = $_POST['longitud'];
		$precio = $_POST['precio'];
		$agua=0;
		$telefono=0;
		$luz=0;
		$gas=0;
		$internet=0;
		foreach($_POST['servicios'] as $j){
			switch ($j) {
				case 'Agua':
					$agua = 1;
					break;
				case 'Telefono':
					$telefono = 1;
					break;
				case 'Luz':
					$luz = 1;
					break;
				case 'Gas':
					$gas = 1;
					break;
				case 'Internet':
					$internet = 1;
					break;
				default:
					break;
			}

				$res = $this->modelo->modificar($id, $latitud, $longitud, $precio, $agua, $luz, $telefono, $gas, $internet);
				if($res != false)
				{
					$this->load->view('header');
					$this->load->view('exitoCambios');
					$this->load->view('footer');

				}else{
					$this->load->view('header');
					$this->load->view('errorCambios');
					$this->load->view('footer');
				}
		}
	}

	public function enviarEmail()
	{
		//if(isset($_POST['asunto']))
		/*
		$destino = "alex_artek@hotmail.com";
		$desde = "FROM: Mapps";
		$asunto = "Prueba";
		$mensaje = "Esto es un mensaje de prueba";
		mail($destino, $asunto, $mensaje, $desde);
		*/
		$config = Array(
		    'protocol' => 'smtp',
		    'smtp_host' => 'ssl://smtp.googlemail.com',
		    'smtp_port' => 465,
		    'smtp_user' => 'brotherowsky@gmail.com',
		    'smtp_pass' => 'novidosN0!',
		    'mailtype'  => 'html', 
		    'charset'   => 'iso-8859-1'
		);
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		// Set to, from, message, etc.

		$this->email->from('brotherowsky@gmail.com', 'Luis Muerto');
		$this->email->to('alex_artek@hotmail.com');
		$this->email->subject('Email Test');
		$this->email->message('Este es solamente un mensaje de prueba.');
		$result = $this->email->send();

		$this->load->view('header');
		$this->load->view('exito');
		$this->load->view('footer');

			}
}
