<?php 

	/**
	 * 
	 */
	class M_valid extends CI_Model
	{
		
		function __construct()
		{
			
		}


		function valid_slide(){

			return [
           
		        ['field' => 'title',
		        'label' => 'Title',
		        'rules' => 'required|trim'],
		        
				['field' => 'desk',
		        'label' => 'Description',
				'rules' => 'required|trim'],

				['field' => 'slide',
		        'label' => 'Slide',
				'rules' => 'required|trim'],
		   	 ];
		}

		function valid_produk(){

			return [
		        ['field' => 'nama_produk',
		        'label' => 'Nama Produk',
		        'rules' => 'required|trim|is_unique[tabel_produk.nama_produk]'],
		        
				['field' => 'desk',
		        'label' => 'Description',
				'rules' => 'required|trim'],

			];
		}

		function valid_editproduk(){

			return [
		        ['field' => 'nama_produk',
		        'label' => 'Nama Produk',
		        'rules' => 'required|trim'],
		        
				['field' => 'desk',
		        'label' => 'Description',
				'rules' => 'required|trim'],

			];
		}


		function valid_brand(){


			return [
		        ['field' => 'name_brand',
		        'label' => 'Nama Brand',
		        'rules' => 'required|trim|is_unique[tbl_brand.name_brand]'],
			];
		}

		function valid_visi(){


			return [
		        ['field' => 'desk',
		        'label' => 'Description',
		        'rules' => 'required|trim'],
			];
		}

		function valid_misi(){


			return [
		        ['field' => 'desk',
		        'label' => 'Description',
		        'rules' => 'required|trim'],
			];
		}

		function valid_ourProduk(){


			return [
		        ['field' => 'desk',
		        'label' => 'Description',
		        'rules' => 'required|trim'],
			];
		}

		function valid_ourStrength(){


			return [
		        ['field' => 'desk',
		        'label' => 'Description',
		        'rules' => 'required|trim'],
			];
		}


		function valid_contact(){

			return [
			        ['field' => 'address',
			        'label' => 'address',
			        'rules' => 'required|trim'],

			        ['field' => 'phone',
			        'label' => 'phone',
			        'rules' => 'required|trim'],

			        ['field' => 'email',
			        'label' => 'email',
			        'rules' => 'required|trim'],

			        ['field' => 'web',
			        'label' => 'website',
			        'rules' => 'required|trim'],

			        ['field' => 'open',
			        'label' => 'open',
			        'rules' => 'required|trim'],

			        ['field' => 'maps',
			        'label' => 'maps',
			        'rules' => 'required|trim'],
			];
		}
	}

 ?>