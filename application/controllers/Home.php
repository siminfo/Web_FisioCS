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

		$this->load->view('templates/header');
		$this->load->view('client/home');
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

	$this->load->view('templates/header');
	$this->load->view('client/blog');
	$this->load->view('templates/footer');		
	}	










}

?>