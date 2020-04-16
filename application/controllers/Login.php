<?php

/**
* 
*/
class Login extends CI_Controller
{
	public $module = 'templates';

	public function __construct()
	{
		parent::__construct();
		
	}
	// Inicio de Sesión
	public function index()
	{

print_r(
		$this->input->post());
		// Verificamos si se envia el formulario
		if (!$this->input->post('enviar'))
		{
			$this->load->view($this->module.'/login_view');
	
		}
		else
		{


			print_r($_POST['username']);

			print_r($_POST['password']);

			if ($_POST['username'] == 'admin'   && $_POST['password'] == 'admin') {
				$session_data = array(
				'username' => "admin",
				'email' => "admin",
				);

				$this->session->set_userdata('logged_in', $session_data);

				redirect('homeAdmin');

			}else{
		//	$this->load->view($this->module.'/login_view');
			
			}
						
				
				}
			}
		
	
}

?>