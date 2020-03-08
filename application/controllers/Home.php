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

		
$this->load->view('client/home');
			
		}	










}

?>