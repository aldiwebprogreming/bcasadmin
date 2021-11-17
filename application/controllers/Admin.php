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

			if ($this->session->username == null) {
				redirect('login/');
			}
		}


		function index(){

			$data['prdk'] = $this->m_data->get_num('tbl_product');
			$data['brand'] = $this->m_data->get_num('tbl_brand');
			$data['admin'] = $this->m_data->get_num('tbl_admin');

			$this->load->view('template/header');
			$this->load->view('admin/index',$data);
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
			// $this->form_validation->set_rules('slide', 'slide ', 'required|trim|is_unique[tbl_slide_home.slid]');


			if ($this->form_validation->run() == false) {
				
				$data['slide'] = $this->m_data->det('tbl_slide_home',$id);
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

					
					$this->m_data->update($id, 'tbl_slide_home', $data);
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
					$this->m_data->update($id, 'tbl_slide_home', $data);
					$this->session->set_flashdata('message', 'swal("Yess!", "Data berhasil diedit", "success");');
					redirect('admin/data_slide');

			 	}

			 }

			}

		}

		function hapus_slide(){

			$id = $this->input->post('id');
			$this->m_data->hapus($id, 'tbl_slide_home');
			$this->session->set_flashdata('message', 'swal("Yess!", "Data berhasil dihapus", "success");');
			redirect('admin/data_slide');
		}


		function product(){

			$data['product'] = $this->m_data->get_all('tabel_produk');


			$this->load->view('template/header');
			$this->load->view('admin/product', $data);
			$this->load->view('template/footer');
		}

		function tambah_product(){

			$this->load->helper(array('form', 'url'));
			$this->form_validation->set_rules('title', 'title', 'required|trim');
			// $this->form_validation->set_rules('images', 'images ', 'required|trim');
		
			if ($this->form_validation->run() == false) {

			$data['brand'] = $this->m_data->get_all('tbl_brand');

			$this->load->view('template/header');
			$this->load->view('admin/tambah_product', $data);
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


		function edit_product($alias = null){

			$this->load->helper(array('form', 'url'));
			$this->form_validation->set_rules('desk', 'deksripsi', 'required|trim');
			$this->form_validation->set_rules('nama_produk', 'nama produk', 'required|trim');
			if ($this->form_validation->run() == false) {

				$data['det'] = $this->m_data->det_produk($alias);
				$data['brand'] = $this->m_data->get_all('tbl_brand');
				$this->load->view('template/header');
				$this->load->view('admin/edit_product', $data);
				$this->load->view('template/footer');

			}else{
				$file = $_FILES['images']['name'];

				if ($file == null) {

					$data = [
					
						'deskripsi' => $this->input->post('deskripsi'),
						'nama_produk' => $this->input->post('nama_produk'),
						'id_merk' => $this->input->post('id_merk'),

					];

					$this->m_data->update_produk($alias, 'tabel_produk', $data);
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
					
						
						'deskripsi' => $this->input->post('deskripsi'),
						'nama_produk' => $this->input->post('nama_produk'),
						'id_merk' => $this->input->post('id_merk'),
						'gambar' =>  $_FILES['images']['name'],
						
					];

					$this->m_data->update_produk($alias, 'tabel_produk', $data);
					$this->session->set_flashdata('message', 'swal("Yess!", "Data berhasil diedit", "success");');
					redirect('admin/product');
			 	}

			 }

			}

		}


		function hapus_product(){

			$id = $this->input->post('id');
			$this->m_data->hapus($id, 'tbl_product');
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
			$data['brand'] = $this->m_data->det('tbl_brand',$id);
			$this->load->view('template/header');
			$this->load->view('admin/edit_brand', $data);
			$this->load->view('template/footer');
			
		}else{

			$data = [

				'kode_brand' => $this->input->post('kode_brand'),
				'name_brand' => $this->input->post('name_brand'),
			];
			
			$this->m_data->update($id, 'tbl_brand', $data);
			$this->session->set_flashdata('message', 'swal("Yess!", "Data berhasil diedit", "success");');
			redirect('admin/brand');

		}

	}


	function hapus_brand(){

		$id = $this->input->post('id');
		$this->m_data->hapus($id, 'tbl_brand');
		$this->session->set_flashdata('message', 'swal("Yess!", "Data berhasil dihapus", "success");');
		redirect('admin/brand');
	}



	function visi(){

		$this->load->helper(array('form', 'url'));
		$this->form_validation->set_rules('desk', 'deksripsi', 'required|trim');

		if ($this->form_validation->run() == false) {
			
			$data['visi'] = $this->db->get('tbl_visi')->result_array();
			$this->load->view('template/header');
			$this->load->view('admin/visi', $data);
			$this->load->view('template/footer');
		}else{

			$config['upload_path']          = './assets/upload';
			$config['allowed_types']        = 'jpg|png|jpeg';
			
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('images')){
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('message', 'swal("Oops!", "Upload gambar gagal", "warning" );');
		 		redirect('admin/visi');
		 	}else{

	 			$data = [
				
					'desk' => $this->input->post('desk'),
					'images' =>  $_FILES['images']['name'],
				];

				$this->m_data->add('tbl_visi', $data);
				$this->session->set_flashdata('message', 'swal("Yess!", "Data berhasil dipost", "success");');
				redirect('admin/visi');

		 	}
		}

		

	}


	function edit_visi($id){

		$this->load->helper(array('form', 'url'));
		$this->form_validation->set_rules('desk', 'deksripsi', 'required|trim');

		if ($this->form_validation->run() == false) {
			$data['visi'] = $this->m_data->det('tbl_visi',$id);
			$this->load->view('template/header');
			$this->load->view('admin/edit_visi', $data);
			$this->load->view('template/footer');
		}else{

			if ($_FILES['images']['name'] == null) {
				
					$data = [
					
						'desk' => $this->input->post('desk'),
					];

					$this->m_data->update($id, 'tbl_visi', $data);
					$this->session->set_flashdata('message', 'swal("Yess!", "Data berhasil dipost", "success");');
					redirect('admin/visi');
			
		 	}else{

				$config['upload_path']          = './assets/upload';
				$config['allowed_types']        = 'jpg|png|jpeg';
		
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('images')){
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('message', 'swal("Oops!", "Upload gambar gagal", "warning" );');
		 		redirect('admin/visi');
			}else{


					$data = [
					
						'desk' => $this->input->post('desk'),
						'images' =>  $_FILES['images']['name'],
					];

					$this->m_data->update($id, 'tbl_visi', $data);
					$this->session->set_flashdata('message', 'swal("Yess!", "Data berhasil dipost", "success");');
					redirect('admin/visi');

			}

		}

		}
	}


	function hapus_visi(){

		$id = $this->input->post('id');
		$this->m_data->hapus($id, 'tbl_visi');
		$this->session->set_flashdata('message', 'swal("Yess!", "Data berhasil dihapus", "success");');
		redirect('admin/visi');
	}


	function misi(){

		$this->load->helper(array('form', 'url'));
		$this->form_validation->set_rules('desk', 'deksripsi', 'required|trim');

		if ($this->form_validation->run() == false) {
			$data['misi'] = $this->db->get('tbl_misi')->result_array();
			$this->load->view('template/header');
			$this->load->view('admin/misi', $data);
			$this->load->view('template/footer');
		}else{

			$config['upload_path']          = './assets/upload';
			$config['allowed_types']        = 'jpg|png|jpeg';
			
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('images')){
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('message', 'swal("Oops!", "Upload gambar gagal", "warning" );');
		 		redirect('admin/misi');
		 	}else{

					$data = [
					
						'desk' => $this->input->post('desk'),
						'images' =>  $_FILES['images']['name'],
					];

					$this->m_data->add('tbl_misi', $data);
					$this->session->set_flashdata('message', 'swal("Yess!", "Data berhasil dipost", "success");');
					redirect('admin/misi');
			 	}

		}



	}


	function hapus_misi(){

		$id = $this->input->post('id');
		$this->m_data->hapus($id, 'tbl_misi');
		$this->session->set_flashdata('message', 'swal("Yess!", "Data berhasil dihapus", "success");');
		redirect('admin/misi');

	}

	function edit_misi($id){

		$this->load->helper(array('form', 'url'));
		$this->form_validation->set_rules('desk', 'deksripsi', 'required|trim');

		if ($this->form_validation->run() == false) {
			$data['misi'] = $this->m_data->det('tbl_misi',$id);
			$this->load->view('template/header');
			$this->load->view('admin/edit_misi', $data);
			$this->load->view('template/footer');
		}else{

			if ($_FILES['images']['name'] == null) {
				
					$data = [
					
						'desk' => $this->input->post('desk'),
					];

					$this->m_data->update($id, 'tbl_misi', $data);
					$this->session->set_flashdata('message', 'swal("Yess!", "Data berhasil dipost", "success");');
					redirect('admin/misi');
			
		 	}else{

				$config['upload_path']          = './assets/upload';
				$config['allowed_types']        = 'jpg|png|jpeg';
		
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('images')){
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('message', 'swal("Oops!", "Upload gambar gagal", "warning" );');
		 		redirect('admin/misi');
			}else{


					$data = [
					
						'desk' => $this->input->post('desk'),
						'images' =>  $_FILES['images']['name'],
					];

					$this->m_data->update($id, 'tbl_misi', $data);
					$this->session->set_flashdata('message', 'swal("Yess!", "Data berhasil dipost", "success");');
					redirect('admin/misi');

			}

		}

		}
	}


	function our_product(){

		$this->load->helper(array('form', 'url'));
		$this->form_validation->set_rules('desk', 'deksripsi', 'required|trim');

		if ($this->form_validation->run() == false) {
			$data['product'] = $this->db->get('tbl_our_product')->result_array();
			$this->load->view('template/header');
			$this->load->view('admin/our_product', $data);
			$this->load->view('template/footer');
		}else{

			$config['upload_path']          = './assets/upload';
			$config['allowed_types']        = 'jpg|png|jpeg';
		
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('images')){
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('message', 'swal("Oops!", "Upload gambar gagal", "warning" );');
		 		redirect('admin/our_product');
			}else{


					$data = [
					
						'desk' => $this->input->post('desk'),
						'images' =>  $_FILES['images']['name'],
					];

				$this->m_data->add('tbl_our_product', $data);
				$this->session->set_flashdata('message', 'swal("Yess!", "Data berhasil dipost", "success");');
				redirect('admin/our_product');
			}

		}

	}


	function edit_our_product($id){

		$this->load->helper(array('form', 'url'));
		$this->form_validation->set_rules('desk', 'deksripsi', 'required|trim');

		if ($this->form_validation->run() == false) {
			$data['product'] = $this->m_data->det('tbl_our_product',$id);
			$this->load->view('template/header');
			$this->load->view('admin/edit_our_product', $data);
			$this->load->view('template/footer');
		}else{

			if ($_FILES['images']['name'] == null) {
				
					$data = [
					
						'desk' => $this->input->post('desk'),
					];

					$this->m_data->update($id, 'tbl_our_product', $data);
					$this->session->set_flashdata('message', 'swal("Yess!", "Data berhasil dipost", "success");');
					redirect('admin/our_product');
			
		 	}else{

				$config['upload_path']          = './assets/upload';
				$config['allowed_types']        = 'jpg|png|jpeg';
		
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('images')){
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('message', 'swal("Oops!", "Upload gambar gagal", "warning" );');
		 		redirect('admin/our_product');
			}else{


					$data = [
					
						'desk' => $this->input->post('desk'),
						'images' =>  $_FILES['images']['name'],
					];

					$this->m_data->update($id, 'tbl_our_product', $data);
					$this->session->set_flashdata('message', 'swal("Yess!", "Data berhasil dipost", "success");');
					redirect('admin/our_product');

			}

		}

		}
	}

	function hapus_our_product(){

		$id = $this->input->post('id');
		$this->m_data->hapus($id,'tbl_our_product');
		$this->session->set_flashdata('message', 'swal("Yess!", "Data berhasil dihapus", "success");');
		redirect('admin/our_product');
	}

		function our_strength(){

		$this->load->helper(array('form', 'url'));
		$this->form_validation->set_rules('desk', 'deksripsi', 'required|trim');

		if ($this->form_validation->run() == false) {
			$data['product'] = $this->db->get('tbl_our_strength')->result_array();
			$this->load->view('template/header');
			$this->load->view('admin/our_strength', $data);
			$this->load->view('template/footer');
		}else{

			$config['upload_path']          = './assets/upload';
			$config['allowed_types']        = 'jpg|png|jpeg';
		
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('images')){
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('message', 'swal("Oops!", "Upload gambar gagal", "warning" );');
		 		redirect('admin/our_strength');
			}else{


					$data = [
					
						'desk' => $this->input->post('desk'),
						'images' =>  $_FILES['images']['name'],
					];

				$this->m_data->add('tbl_our_strength', $data);
				$this->session->set_flashdata('message', 'swal("Yess!", "Data berhasil dipost", "success");');
				redirect('admin/our_strength');
			}

		}

	}


	function edit_our_strength($id){

		$this->load->helper(array('form', 'url'));
		$this->form_validation->set_rules('desk', 'deksripsi', 'required|trim');

		if ($this->form_validation->run() == false) {
			$data['strength'] =$this->m_data->det('tbl_our_strength',$id);
			$this->load->view('template/header');
			$this->load->view('admin/edit_our_strength', $data);
			$this->load->view('template/footer');
		}else{

			if ($_FILES['images']['name'] == null) {
				
					$data = [
					
						'desk' => $this->input->post('desk'),
					];

					$this->m_data->update($id, 'tbl_our_strength', $data);
					$this->session->set_flashdata('message', 'swal("Yess!", "Data berhasil dipost", "success");');
					redirect('admin/our_strength');
			
		 	}else{

				$config['upload_path']          = './assets/upload';
				$config['allowed_types']        = 'jpg|png|jpeg';
		
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('images')){
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('message', 'swal("Oops!", "Upload gambar gagal", "warning" );');
		 		redirect('admin/our_strength');
			}else{


					$data = [
					
						'desk' => $this->input->post('desk'),
						'images' =>  $_FILES['images']['name'],
					];

					$this->m_data->update($id, 'tbl_our_strength', $data);
					$this->session->set_flashdata('message', 'swal("Yess!", "Data berhasil dipost", "success");');
					redirect('admin/our_strength');

			}

		}

		}
	}

	function hapus_our_strength(){

		$id = $this->input->post('id');
		$this->m_data->hapus($id, 'tbl_our_strength');
		$this->session->set_flashdata('message', 'swal("Yess!", "Data berhasil dihapus", "success");');
		redirect('admin/our_strength');
	}



	function admin(){


		$data['admin'] = $this->m_data->get_all('tbl_admin');
		$this->load->view('template/header');
		$this->load->view('admin/admin', $data);
		$this->load->view('template/footer');
	}

	function tambah_admin(){

		$this->load->helper(array('form', 'url'));
		$this->form_validation->set_rules('username', 'username', 'required|trim|min_length[4]');
		$this->form_validation->set_rules('pass', 'password', 'required|trim|min_length[6]');	

		if ($this->form_validation->run() == false) {
			
			$this->load->view('template/header');
			$this->load->view('admin/tambah_admin');
			$this->load->view('template/footer');
		}else{

			$data = [

				'username' => $this->input->post('username'),
				'pass' => password_hash($this->input->post('pass'), PASSWORD_DEFAULT),
			];

			$this->m_data->add('tbl_admin', $data);
			$this->session->set_flashdata('message', 'swal("Yess!", "Data berhasil dipost", "success");');
			redirect('admin/admin');
		}

	}


	function hapus_admin(){

		$id = $this->input->post('id');
		$this->m_data->hapus($id, 'tbl_admin');
		$this->session->set_flashdata('message', 'swal("Yess!", "Data berhasil dihapus", "success");');
		redirect('admin/admin');
	}









	}

 ?>