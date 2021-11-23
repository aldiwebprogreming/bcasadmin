<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model("product_model");
		$this->load->helper('url');
    }

	public function index()
	{	

		$data['slide'] = $this->product_model->get_all('tbl_slide_home');
		$data['visi'] = $this->product_model->all('tbl_visi');
		$data['misi'] = $this->product_model->all('tbl_misi');
		$data['product'] = $this->product_model->all('tbl_our_product');
		$data['strength'] = $this->product_model->all('tbl_our_strength');
		$this->load->view('frontend/home', $data);
	}
	
	public function about()
	{	

		$data['visi'] = $this->product_model->all('tbl_visi');
		$data['misi'] = $this->product_model->all('tbl_misi');
		$data['product'] = $this->product_model->all('tbl_our_product');
		$data['strength'] = $this->product_model->all('tbl_our_strength');
		$this->load->view('frontend/about', $data);
	}
	
	public function products()
	{
		$data['products'] = $this->product_model->products();
		$data['brand'] = $this->product_model->get_all('tbl_brand');
		$this->load->view('frontend/shop', $data);	
	}
	
	public function productDetail($alias = null)
	{	


		$data['detail'] = $this->product_model->detailProduk($alias);
		if ($data['detail'] == false) {
			redirect('/');
		}else{
		$this->load->view('frontend/product-detail', $data);	
		}
	}
	
	public function contact()
	{	
		$data['data'] = $this->product_model->all('tbl_contact');
		$this->load->view('frontend/contact', $data);
	}
	
	public function gallery()
	{
		$this->load->view('frontend/gallery');	
	}


	function pesan(){

		$kirim = $this->input->post('kirim');

		if (isset($kirim)) {
			
			$data = [

				'nama' =>  $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'phone' => $this->input->post('phone'),
				'nama_usaha' => $this->input->post('nama_usaha'),
				'pesan' => $this->input->post('pesan'),
			];

			$this->product_model->add('tbl_pesan', $data);
			$this->session->set_flashdata('message', 'swal("Yess!", "Message sent successfully", "success");');
			redirect('contact/');
		}
	}
	
}


