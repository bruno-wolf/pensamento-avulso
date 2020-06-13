<?php

	class Artists_Model extends CI_Model {
		
		public function get_menu(){
			$q = "SELECT name, slug
						FROM artists
						WHERE publish = 1
						ORDER BY name ASC";
			return $this->db->query($q)->result_array();
		}
		
		public function get_one($slug){
			// esta concatenação do $slug para converter em string deu luta!
			// o .$this->language. só funcionava com pelicas e, com pelicas não estava a conseguir passar as aspas para conter o slug... 
			// e depois era tão simples como colocar umas aspas no final e inicio da string da query! learning with a smile!
			$slug = strval ($slug);
			$q = 'SELECT image,  slug, name, '.$this->language.'_text AS text FROM artists WHERE slug = "'.$slug.'" AND publish = 1';
			return $this->db->query($q)->row_array();
		}

		public function get_from_artist($slug){

			$q = "SELECT id FROM artists WHERE slug = '$slug'";

			$artist_id = $this->db->query($q)->row_array()['id'];

			$q = 'SELECT title, image, date_start, date_end, '.$this->language.'_summary AS summary, slug
						FROM creations
						WHERE publish = 1
						AND artist_id = "'.$artist_id.'"
						AND date_end > NOW()
						ORDER BY date_start ASC';
			return $this->db->query($q)->result_array();
		}

		// ADMIN
		public function get_all_admin(){
			$q="SELECT id, name, date_added, publish FROM artists";
			return $this->db->query($q)->result_array();
		}

		public function get_one_admin($id){
      $q = "SELECT * FROM artists WHERE id = $id";
			return $this->db->query($q)->row_array();
    }
	}
