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


		function act_login(){

			$username = $this->input->post('username');
			$pass = $this->input->post('pass');

			$cek = $this->db->get_where('tbl_admin',['username' => $username])->row_array();
			if ($cek == true) {
				
				if (password_verify($pass, $cek['pass'])) {
					
					$data = [
						'username' => $cek['username'],
					];
					$this->session->set_userdata($data);
					redirect('admin/');
				}else{

					$this->session->set_flashdata('message', 'swal("Oops!", "Password Salah", "error");');
					redirect('login/');
				}
			}else{

				$this->session->set_flashdata('message', 'swal("Oops!", "Username Salah", "error");');
					redirect('login/');
			}
		}

		function logout(){


			$this->session->unset_userdata('username');
			$this->session->set_flashdata('message', 'swal("Sukses!", "Anda Berhasil Keluar", "success");');
			redirect('login/');
		}
	}
 ?>