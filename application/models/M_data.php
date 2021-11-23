<?php 

	/**
	 * 
	 */
	class M_data extends CI_Model
	{
		
		function __construct()
		{
			
		}


		function get_all($table){

			return $this->db->get($table)->result_array();
		}
		function det($table, $id){

			return $this->db->get_where($table, ['id' => $id])->row_array();
		}

		function add($table, $data){



			return $this->db->insert($table, $data);
		}

		function get_num($table){

			return $this->db->get($table)->num_rows();
		}

		function update($id, $table, $data){

			return $this->db->update($table, $data,['id' => $id]);
		}

		function hapus($id, $table){

			$this->db->where('id', $id);
			return $this->db->delete($table);

		}

		function det_produk($alias){

			return $this->db->get_where('tabel_produk', ['alias' => $alias])->row_array();
		}

		function update_produk($alias, $table, $data){

			return $this->db->update($table, $data,['alias' => $alias]);
		}

	}

 ?>