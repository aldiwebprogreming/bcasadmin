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

		function add($table, $data){

			return $this->db->insert($table, $data);
		}
	}

 ?>