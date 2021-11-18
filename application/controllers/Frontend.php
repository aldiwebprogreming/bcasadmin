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

		$this->load->view('frontend/product-detail', $data);	
	}
	
	public function contact()
	{
		$this->load->view('frontend/contact');
	}
	
	public function gallery()
	{
		$this->load->view('frontend/gallery');	
	}
	
}


