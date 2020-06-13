<?php

	class Artists extends MY_Controller {
		
		public function __construct(){
			parent:: __construct();
      $this->ui = 'frontend';
			$this->load->model('artists_model');
		}

		public function index(){}

		public function show($slug){

			$this->data['artist'] = $this->artists_model->get_one($slug);

			if(!$this->data['artist']){
				show_404();
			}

			$this->data['creations'] = $this->artists_model->get_from_artist($slug);
			$this->render('artist_show');

		}

	}