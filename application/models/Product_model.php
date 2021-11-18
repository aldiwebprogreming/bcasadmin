<?php

class Product_model extends CI_Model
{
    private $_table = "tabel_produk";
	
	public function products()
	{
		$this->db->select('*');
		$this->db->from('tabel_produk');
		$query = $this->db->get();
		return $query->result();
	}
	
	public function detailProduk($alias)
	{
		$this->db->select('*');
		$this->db->from('tabel_produk');
		$this->db->join('tbl_brand','tbl_brand.kode_brand=tabel_produk.id_merk');
		$this->db->where('tabel_produk.alias', $alias);
		$query = $this->db->get();
		return $query->row();	  	
	}


	function all($table){

		return $this->db->get($table)->row_array();
	}

	function get_all($table){

		return $this->db->get($table)->result_array();
	}
	
}