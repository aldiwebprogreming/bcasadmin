<?php 

	/**
	 * 
	 */
	class Login extends CI_Controller
	{
		
		function __construct()
		{

			parent::__construct();
			$this->load->library('form_validation');
		}


		function index(){

			$this->load->view('login/index');
		}
	}
 ?>