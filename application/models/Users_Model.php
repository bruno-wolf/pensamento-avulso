<?php

	class Users_Model extends CI_Model
	{

		// ADMIN

		public function get_all_admin(){
			$q="SELECT * FROM users ORDER BY id ASC";
			return $this->db->query($q)->result_array();
		}

		public function get_one_admin($id){
      $q = "SELECT * FROM users WHERE id = $id";
			return $this->db->query($q)->row_array();
      
    }

	}