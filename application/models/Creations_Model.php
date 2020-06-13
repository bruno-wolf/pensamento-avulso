<?php

	class Creations_Model extends CI_Model {
		
		public function get_all($status = NULL, $limit = NULL){
			$condition_one = '';
			$condition_two = '';

			if($status == 'past'){
				$condition_one = ' AND creations.date_end < NOW() ';
			}
			if($status == 'present'){
				$condition_one = ' AND creations.date_start < NOW() AND creations.date_end > NOW() ';
			}
			if($status == 'future'){
				$condition_one = ' AND creations.date_start > NOW() ';
			}
			if($limit){
				$condition_two = 'LIMIT '.$limit;
			}
			

			$q = 'SELECT creations.title, creations.image, creations.date_start, creations.date_end, creations.'.$this->language.'_summary AS summary, creations.slug, artists.name AS artist, artists.slug AS artist_slug
						FROM creations
						JOIN artists
						ON creations.artist_id = artists.id
						WHERE creations.publish = 1 AND artists.publish = 1 '
						.$condition_one.
						' ORDER BY creations.date_start ASC '.
						$condition_two;
			return $this->db->query($q)->result_array();
		}

		public function get_one($slug){
			$q = 'SELECT creations.image, creations.slug, creations.title, creations.date_start, creations.date_end, creations.'.$this->language.'_text AS text, creations.'.$this->language.'_credits AS credits, artists.name AS artist, artists.slug AS artist_slug
			FROM creations
			JOIN artists
			ON creations.artist_id = artists.id
			WHERE creations.publish = 1 AND artists.publish = 1
			AND creations.slug = "'.$slug.'"';
			return $this->db->query($q)->row_array();

		}

		public function get_slides(){
      $q = "SELECT image
						FROM creations
						WHERE publish = 1
						ORDER BY RAND ()";
			return $this->db->query($q)->result_array();
    }

		// ADMIN
		public function get_all_admin(){
			$q="SELECT creations.id, creations.title, creations.date_start, creations.date_end,creations.publish, artists.name AS artist
					FROM creations
					JOIN artists
					ON creations.artist_id = artists.id
					ORDER BY id ASC";
			return $this->db->query($q)->result_array();
		}

		public function get_one_admin($id){
      $q = "SELECT * FROM creations WHERE id = $id";
			return $this->db->query($q)->row_array();
    }

		public function list_artists(){
			$q = "SELECT id, name FROM artists ORDER BY name ASC";
			return $this->db->query($q)->result_array();
		}


	}