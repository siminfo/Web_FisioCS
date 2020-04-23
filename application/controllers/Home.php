<?php

/**
* 
*/
class Home extends CI_Controller
{
	public $module = 'home';

	public function __construct()
	{
		parent::__construct();
		
	}



	public function index()
	{


		$comentarios = $this->db->query("SELECT * FROM serrano_comentarios");
		$data['comentarios'] = $comentarios;
		$personal = $this->db->query("SELECT * FROM serrano_personal");
		$data['personal'] = $personal;
		$filtros = $this->db->query("SELECT * FROM serrano_filtro_galerias");
		$data['filtros'] = $filtros;
		$fotos = $this->db->query("SELECT * FROM serrano_galeria where inicio = 1");
		$data['fotos'] = $fotos;

		$this->load->view('templates/header');
		$this->load->view('client/home',$data);
		$this->load->view('templates/footer');		
		}	



	public function galeria()
	{


		$filtros = $this->db->query("SELECT * FROM serrano_filtro_galerias");
		$data['filtros'] = $filtros;
		$imagenes = $this->db->query("SELECT * FROM serrano_galeria");
		$data['imagenes'] = $imagenes;

		$this->load->view('templates/header');
		$this->load->view('client/galeria',$data);
			$this->load->view('templates/footer');
	}



	public function contacto()
	{

	$this->load->view('templates/header');
	$this->load->view('client/contacto');
	$this->load->view('templates/footer');		
	}	


	public function blog()
	{



		$articulos = $this->db->query("SELECT * FROM serrano_blog");

		$data['articulos'] = $articulos;

	$this->load->view('templates/header');
	$this->load->view('client/blog',$data);
	$this->load->view('templates/footer');		
	}	


	public function fisioterapia()
	{

	$this->load->view('templates/header');
	$this->load->view('client/fisioterapia');
	$this->load->view('templates/footer');		
	}	


	public function osteopatia()
	{

	$this->load->view('templates/header');
	$this->load->view('client/osteopatia');
	$this->load->view('templates/footer');		
	}	



	public function podologia()
	{

	$this->load->view('templates/header');
	$this->load->view('client/podologia');
	$this->load->view('templates/footer');		
	}


		public function epi()
	{

	$this->load->view('templates/header');
	$this->load->view('client/epi');
	$this->load->view('templates/footer');		
	}


			public function tecarterapia()
	{

	$this->load->view('templates/header');
	$this->load->view('client/tecarterapia');
	$this->load->view('templates/footer');		
	}

		public function nmp()
	{

	$this->load->view('templates/header');
	$this->load->view('client/nmp');
	$this->load->view('templates/footer');		
	}


			public function ecografia()
	{

	$this->load->view('templates/header');
	$this->load->view('client/ecografia');
	$this->load->view('templates/footer');		
	}


				public function nutricion()
	{

	$this->load->view('templates/header');
	$this->load->view('client/nutricion');
	$this->load->view('templates/footer');		
	}


				public function pilates()
	{

	$this->load->view('templates/header');
	$this->load->view('client/pilates');
	$this->load->view('templates/footer');		
	}


					public function gimnasia()
	{

	$this->load->view('templates/header');
	$this->load->view('client/gimnasia');
	$this->load->view('templates/footer');		
	}



	public function empleado()
	{


		$personal = $this->db->query("SELECT * FROM serrano_personal where id = " .$_GET['id']);

		$data['personal'] = $personal->row_array();

	$this->load->view('templates/header');
	$this->load->view('client/empleado',$data);
	$this->load->view('templates/footer');		
	}

public function paginaConstruccion()
	{

	$this->load->view('templates/header');
	$this->load->view('client/error');
	$this->load->view('templates/footer');		
	}


	public function ejercicioTerapeutico()
	{

	$this->load->view('templates/header');
	$this->load->view('client/ejercicio_terapeutico');
	$this->load->view('templates/footer');		
	}

public function yoga()
	{

	$this->load->view('templates/header');
	$this->load->view('client/yoga');
	$this->load->view('templates/footer');		
	}

	public function fisioterapiaRespiratoria()
	{

	$this->load->view('templates/header');
	$this->load->view('client/fisioterapia_respiratoria');
	$this->load->view('templates/footer');		
	}


public function terapiaManual()
	{

	$this->load->view('templates/header');
	$this->load->view('client/terapiaManual');
	$this->load->view('templates/footer');		
	}


}

?>