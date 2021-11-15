<?php 

	/**
	 * 
	 */
	class Admin extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->library('form_validation');
			$this->load->model('m_data');
		}


		function index(){


			$this->load->view('template/header');
			$this->load->view('admin/index');
			$this->load->view('template/footer');
		}


		function data_slide(){
			
			$data['slide'] = $this->m_data->get_all('tbl_slide_home');

			$this->load->view('template/header');
			$this->load->view('admin/slid', $data);
			$this->load->view('template/footer');
		}

		function tambah_slide(){

			$this->load->helper(array('form', 'url'));
			$this->form_validation->set_rules('title', 'title', 'required|trim');
			$this->form_validation->set_rules('desk', 'description ', 'required|trim');
			$this->form_validation->set_rules('slide', 'slide ', 'required|trim|is_unique[tbl_slide_home.slid]');

			if ($this->form_validation->run() == false) {
				
				$this->load->view('template/header');
				$this->load->view('admin/tambah_slid');
				$this->load->view('template/footer');
			}else{

				$config['upload_path']          = './assets/upload';
				$config['allowed_types']        = 'jpg|png|jpeg';
			

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('images')){
					$error = array('error' => $this->upload->display_errors());
					$this->session->set_flashdata('message', 'swal("Oops!!", "Upload gambar gagal", "warning" );');
			 		redirect('admin/data_slide');
			 	}else{

					$data = [
					
						'title' => $this->input->post('title'),
						'desk' => $this->input->post('desk'),
						'images' =>  $_FILES['images']['name'],
						'slid' => $this->input->post('slide'),

					];
					$this->m_data->add('tbl_slide_home', $data);
					$this->session->set_flashdata('message', 'swal("Yess!", "Datar berhasil dipost", "success");');
					redirect('admin/data_slide');

			 	}
			}

		

		}


		function edit_slide($id){

			$this->load->helper(array('form', 'url'));
			$this->form_validation->set_rules('title', 'title', 'required|trim');
			$this->form_validation->set_rules('desk', 'description ', 'required|trim');
			$this->form_validation->set_rules('slide', 'slide ', 'required|trim|is_unique[tbl_slide_home.slid]');


			if ($this->form_validation->run() == false) {
				
				$data['slide'] = $this->db->get_where('tbl_slide_home', ['id' => $id])->row_array();
				$this->load->view('template/header');
				$this->load->view('admin/edit_slid', $data);
				$this->load->view('template/footer');
			}else{

				$file = $_FILES['images']['name'];
				if ($file == null) {
					
					$data = [
					
						'title' => $this->input->post('title'),
						'desk' => $this->input->post('desk'),
						'slid' => $this->input->post('slide'),

					];

					$this->db->where('id', $id);
					$this->db->update('tbl_slide_home', $data);
					$this->session->set_flashdata('message', 'swal("Yess!", "Data berhasil diedit", "success");');
					redirect('admin/data_slide');
				}else{

				$config['upload_path']          = './assets/upload';
				$config['allowed_types']        = 'jpg|png|jpeg';
			

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('images')){
					$error = array('error' => $this->upload->display_errors());
					$this->session->set_flashdata('message', 'swal("Oops!!", "Upload gambar gagal", "warning" );');
			 		redirect('admin/data_slide');
			 	}else{

					$data = [
					
						'title' => $this->input->post('title'),
						'desk' => $this->input->post('desk'),
						'images' =>  $_FILES['images']['name'],
						'slid' => $this->input->post('slide'),

					];
					$this->db->where('id', $id);
					$this->db->update('tbl_slide_home', $data);
					$this->session->set_flashdata('message', 'swal("Yess!", "Data berhasil diedit", "success");');
					redirect('admin/data_slide');

			 	}

			 }

			}

		}

		function hapus_slide(){

			$id = $this->input->post('id');
			$this->db->where('id', $id);
			$this->db->delete('tbl_slide_home');
			$this->session->set_flashdata('message', 'swal("Yess!", "Data berhasil dihapus", "success");');
			redirect('admin/data_slide');
		}


		function product(){

			$data['product'] = $this->m_data->get_all('tbl_product');

			$this->load->view('template/header');
			$this->load->view('admin/product', $data);
			$this->load->view('template/footer');
		}

		function tambah_product(){

			$this->load->helper(array('form', 'url'));
			$this->form_validation->set_rules('title', 'title', 'required|trim');
			// $this->form_validation->set_rules('images', 'images ', 'required|trim');
		
			if ($this->form_validation->run() == false) {

			$this->load->view('template/header');
			$this->load->view('admin/tambah_product');
			$this->load->view('template/footer');

			}else{

				$config['upload_path']          = './assets/upload';
				$config['allowed_types']        = 'jpg|png|jpeg';
			

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('images')){
					$error = array('error' => $this->upload->display_errors());
					$this->session->set_flashdata('message', 'swal("Oops!", "Upload gambar gagal", "warning" );');
			 		redirect('admin/product');
			 	}else{

					$data = [
					
						'title_product' => $this->input->post('title'),
						'images' =>  $_FILES['images']['name'],
						'kode_brand' => $this->input->post('kode_brand'),

					];

					$this->m_data->add('tbl_product', $data);
					$this->session->set_flashdata('message', 'swal("Yess!", "Data berhasil dipost", "success");');
					redirect('admin/product');
			 	}
			}
		}


		function edit_product($id){

			$this->load->helper(array('form', 'url'));
			$this->form_validation->set_rules('title', 'title', 'required|trim');
			if ($this->form_validation->run() == false) {

				$data['det'] = $this->db->get_where('tbl_product',['id' => $id])->row_array();
				$this->load->view('template/header');
				$this->load->view('admin/edit_product', $data);
				$this->load->view('template/footer');

			}else{
				$file = $_FILES['images']['name'];

				if ($file == null) {

					$data = [
					
						'title_product' => $this->input->post('title'),
						'kode_brand' => $this->input->post('kode_brand'),

					];

					$this->db->where('id', $id);
					$this->db->update('tbl_product', $data);
					$this->session->set_flashdata('message', 'swal("Yess!", "Data berhasil diedit", "success");');
					redirect('admin/product');
					
				}else{

				$config['upload_path']          = './assets/upload';
				$config['allowed_types']        = 'jpg|png|jpeg';
			

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('images')){
					$error = array('error' => $this->upload->display_errors());
					$this->session->set_flashdata('message', 'swal("Oops!", "Upload gambar gagal", "warning" );');
			 		redirect('admin/product');
			 	}else{

					$data = [
					
						'title_product' => $this->input->post('title'),
						'images' =>  $_FILES['images']['name'],
						'kode_brand' => $this->input->post('kode_brand'),

					];

					$this->db->where('id', $id);
					$this->db->update('tbl_product', $data);
					$this->session->set_flashdata('message', 'swal("Yess!", "Data berhasil diedit", "success");');
					redirect('admin/product');
			 	}

			 }

			}

		}


		function hapus_product(){

			$id = $this->input->post('id');
			$this->db->where('id', $id);
			$this->db->delete('tbl_product');
			$this->session->set_flashdata('message', 'swal("Yess!", "Data berhasil dihapus", "success");');
			redirect('admin/product');
		}



	function brand(){

		$data['brand'] = $this->m_data->get_all('tbl_brand');

		$this->load->view('template/header');
		$this->load->view('admin/brand', $data);
		$this->load->view('template/footer');
	}


	function tambah_brand(){

		$this->load->helper(array('form', 'url'));
		$this->form_validation->set_rules('kode_brand', 'kode brand', 'required|trim');
		$this->form_validation->set_rules('name_brand', 'name brand', 'required|trim');


		if ($this->form_validation->run() == false) {

			$this->load->view('template/header');
			$this->load->view('admin/tambah_brand');
			$this->load->view('template/footer');
			
		}else{


			$data = [

				'kode_brand' => $this->input->post('kode_brand'),
				'name_brand' => $this->input->post('name_brand'),
			];

			$this->m_data->add('tbl_brand', $data);
			$this->session->set_flashdata('message', 'swal("Yess!", "Data berhasil dipost", "success");');
			redirect('admin/brand');
			 	
		}
	}


	function edit_brand($id){

		$this->load->helper(array('form', 'url'));
		$this->form_validation->set_rules('kode_brand', 'kode brand', 'required|trim');
		$this->form_validation->set_rules('name_brand', 'name brand', 'required|trim');


		if ($this->form_validation->run() == false) {
			$data['brand'] = $this->db->get_where('tbl_brand',['id' => $id])->row_array();
			$this->load->view('template/header');
			$this->load->view('admin/edit_brand', $data);
			$this->load->view('template/footer');
			
		}else{

			$data = [

				'kode_brand' => $this->input->post('kode_brand'),
				'name_brand' => $this->input->post('name_brand'),
			];
			$this->db->where('id', $id);
			$this->db->update('tbl_brand', $data);
			$this->session->set_flashdata('message', 'swal("Yess!", "Data berhasil diedit", "success");');
			redirect('admin/brand');

		}

	}


	function hapus_brand(){

		$id = $this->input->post('id');
		$this->db->where('id', $id);
		$this->db->delete('tbl_brand');
		$this->session->set_flashdata('message', 'swal("Yess!", "Data berhasil dihapus", "success");');
		redirect('admin/brand');
	}



	function visi(){

		$data['visi'] = $this->db->get('tbl_visi')->result_array();
		$this->load->view('template/header');
		$this->load->view('admin/visi', $data);
		$this->load->view('template/footer');

	}

		function misi(){

		$data['misi'] = $this->db->get('tbl_misi')->result_array();
		$this->load->view('template/header');
		$this->load->view('admin/misi', $data);
		$this->load->view('template/footer');

	}


	function admin(){


		$data['admin'] = $this->m_data->get_all('tbl_admin');
		$this->load->view('template/header');
		$this->load->view('admin/admin', $data);
		$this->load->view('template/footer');
	}

	function tambah_admin(){

		$this->load->helper(array('form', 'url'));
		$this->form_validation->set_rules('name', 'name', 'required|trim|min_length[4]');
		$this->form_validation->set_rules('pass', 'password', 'required|trim|min_length[6]');	

		if ($this->form_validation->run() == false) {
			
			$this->load->view('template/header');
			$this->load->view('admin/tambah_admin');
			$this->load->view('template/footer');
		}else{

			$data = [

				'name' => $this->input->post('name'),
				'pass' => password_hash($this->input->post('pass'), PASSWORD_DEFAULT),
			];

			$this->m_data->add('tbl_admin', $data);
			$this->session->set_flashdata('message', 'swal("Yess!", "Data berhasil dipost", "success");');
			redirect('admin/admin');
		}

	}


	function hapus_admin(){

		$id = $this->input->post('id');
		$this->db->where('id', $id);
		$this->db->delete('tbl_admin');
		$this->session->set_flashdata('message', 'swal("Yess!", "Data berhasil dihapus", "success");');
		redirect('admin/admin');
	}









	}

 ?>