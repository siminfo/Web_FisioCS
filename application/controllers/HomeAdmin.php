<?php

/**
* 
*/
class HomeAdmin extends CI_Controller
{
	public $module = 'home';

	public function __construct()
	{
		parent::__construct();


		if (!isset($this->session->userdata['logged_in'])) {

			header("location: login");

		}
		
	}



	public function index()
	{

		$this->load->view('templates/headerAdmin');
		$this->load->view('admin/home');
			
	}	





	public function articulos()
	{



		

		$articulos = $this->db->query("SELECT * FROM serrano_blog");

		$data['articulos'] = $articulos;

		$this->load->view('templates/headerAdmin');
		$this->load->view('admin/articulos',$data);
			
	}	




		public function subirArticulo()
	{

	


			if (    isset($_POST['titulo']    )  && $_POST['titulo'] != ""   &&   isset($_POST['texto']    )  && $_POST['texto'] != ""  ) {

				
		$nombre_archivo = str_replace(' ', '', $_POST['titulo']);  
		$nombre_archivo = $nombre_archivo;


		$mi_archivo = 'imagen';
        $config['upload_path'] = "assets/img/";
        $config['file_name'] = $nombre_archivo;
        $config['allowed_types'] ='jpg|jpeg|png';
        

        $this->load->library('upload', $config);
        
        if (!$this->upload->do_upload($mi_archivo)) {
            //*** ocurrio un error
            $data['uploadError'] = $this->upload->display_errors();
            echo $this->upload->display_errors();
            return;
        }

       		 $data['uploadSuccess'] = $this->upload->data();

        	$resultado = $data['uploadSuccess'];

       

				$this->db->query("INSERT INTO `serrano_blog` (`titulo`, `texto`, `imagen`) VALUES ('".$_POST['titulo']."', '".$_POST['texto']."', '".$resultado['file_name']."');");


					redirect('articulos');

		}
			
	}	




public function borrarArticulo($id)
	{



		$this->db->query("delete from serrano_blog where id=".$id);

		redirect('articulos');


	}




	public function personal()
	{

		$personal = $this->db->query("SELECT * FROM serrano_personal");

		$data['personal'] = $personal;


		$this->load->view('templates/headerAdmin');
		$this->load->view('admin/personal',$data);
			$this->load->view('templates/footerAdmin');
	}







public function subirEmpleado()
	{


if (    isset($_POST['nombre']    )  && $_POST['nombre'] != ""   &&   isset($_POST['texto1']    )  && $_POST['texto1'] != ""  &&   isset($_POST['texto2'])  && $_POST['texto2'] != "" ) {

				
		$nombre_archivo = str_replace(' ', '', $_POST['nombre']);  
		$nombre_archivo = $nombre_archivo;


		$mi_archivo = 'imagen';
        $config['upload_path'] = "assets/img/";
        $config['file_name'] = $nombre_archivo;
        $config['allowed_types'] ='jpg|jpeg|png';
        

        $this->load->library('upload', $config);
        
        if (!$this->upload->do_upload($mi_archivo)) {
            //*** ocurrio un error
            $data['uploadError'] = $this->upload->display_errors();
            echo $this->upload->display_errors();
            return;
        }

       		 $data['uploadSuccess'] = $this->upload->data();

        	$resultado = $data['uploadSuccess'];

       

				$this->db->query("INSERT INTO `serrano_personal` (`nombre`, `texto1`, `texto2`, `facebook`, `twitter`, `linkedin`, `imagen`) VALUES ('".$_POST['nombre']."', '".$_POST['texto1']."', '".$_POST['texto2']. "', '".$_POST['facebook']."', '".$_POST['twitter']."', '".$_POST['linkedin']. "','".$resultado['file_name']."');");


					redirect('personal');

		}

			
	}



	public function borrarEmpleado($id)
	{




		$this->db->query("delete from serrano_personal where id=".$id);

		redirect('personal');


	}















	public function comentarios()
	{

		$comentarios = $this->db->query("SELECT * FROM serrano_comentarios");

		$data['comentarios'] = $comentarios;


		$this->load->view('templates/headerAdmin');
		$this->load->view('admin/comentarios',$data);
			$this->load->view('templates/footerAdmin');
	}





	public function subirComentario()
	{




if (    isset($_POST['nombre']    )  && $_POST['nombre'] != ""   &&   isset($_POST['texto']    )  && $_POST['texto'] != "" ) {

				
		$nombre_archivo = str_replace(' ', '', $_POST['nombre']);  
		$nombre_archivo = $nombre_archivo;


		$mi_archivo = 'imagen';
        $config['upload_path'] = "assets/img/";
        $config['file_name'] = $nombre_archivo;
        $config['allowed_types'] ='jpg|jpeg|png';
        

        $this->load->library('upload', $config);
        
        if (!$this->upload->do_upload($mi_archivo)) {
            //*** ocurrio un error
            $data['uploadError'] = $this->upload->display_errors();
            echo $this->upload->display_errors();
            return;
        }

       		 $data['uploadSuccess'] = $this->upload->data();

        	$resultado = $data['uploadSuccess'];

       

				$this->db->query("INSERT INTO `serrano_comentarios` (`nombre`, `texto`, `imagen`) VALUES ('".$_POST['nombre']."', '".$_POST['texto']."','".$resultado['file_name']."');");


					redirect('comentarios');

		}

			
	}



	public function borrarComentario($id)
	{

		$this->db->query("delete from serrano_comentarios where id=".$id);

		redirect('comentarios');


	}








	public function galeria()
	{


		$imagenes = $this->db->query("SELECT * FROM serrano_galeria");

		$data['imagenes'] = $imagenes;

		$this->load->view('templates/headerAdmin');
		$this->load->view('admin/galeria',$data);
			$this->load->view('templates/footerAdmin');
	}




public function subirFoto()
	{

		$filtros = $this->db->query("SELECT * FROM serrano_filtro_galerias");

		$data['filtros'] = $filtros;

		$this->load->view('templates/headerAdmin');
		$this->load->view('admin/subirFoto',$data);
		$this->load->view('templates/footerAdmin');
	}


public function marcarFotoInicio($id,$valor)
	{

		$filtros = $this->db->query("UPDATE serrano_galeria set inicio = ".$valor." where id = ".$id);
		redirect('galeria');
	}





public function editarFoto()
	{

		$imagenes = $this->db->query("SELECT * FROM serrano_galeria where id =" .$_GET['id']);

		$data['imagen'] = $imagenes->row_array();


		$filtros = $this->db->query("SELECT * FROM serrano_filtro_galerias");

		$data['filtros'] = $filtros;

		$data['id'] = $_GET['id'];

		$this->load->view('templates/headerAdmin');
		$this->load->view('admin/editarFoto',$data);
		$this->load->view('templates/footerAdmin');
	}



public function subirFotoGaleria()
	{

	
		$mi_archivo = 'imagen';
        $config['upload_path'] = "assets/img/galeria";
 
        $config['allowed_types'] ='jpg|jpeg|png';
        

        $this->load->library('upload', $config);
        
        if (!$this->upload->do_upload($mi_archivo)) {
            //*** ocurrio un error
            $data['uploadError'] = $this->upload->display_errors();
            echo $this->upload->display_errors();
            return;
        }

       		 $data['uploadSuccess'] = $this->upload->data();

        	$resultado = $data['uploadSuccess'];

      
				$this->db->query("INSERT INTO `serrano_galeria` (`filtro`, `imagen`) VALUES ('".$_POST['filtro']."','".$resultado['file_name']."');");


					redirect('galeria');



	}






public function editarFotoGaleria($id)
	{

	
	
      
				$this->db->query("Update serrano_galeria set filtro = ".$_POST['filtro']." where id = ".$id);


					redirect('galeria');



	}







	public function borrarfoto($id)
	{

		$this->db->query("delete from serrano_galeria where id=".$id);

		redirect('galeria');


	}





}

?>