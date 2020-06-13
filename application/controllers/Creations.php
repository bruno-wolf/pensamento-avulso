<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Creations extends MY_Controller {
		
		public function __construct(){
			parent:: __construct();
      $this->ui = 'frontend';
			$this->load->model('creations_model');
		}

		public function index(){
			$this->data['slides'] = $this->creations_model->get_slides();
			$this->data['creations_now'] = $this->creations_model->get_all('present', NULL);
			$this->data['creations_future'] = $this->creations_model->get_all('future', NULL);
			$this->data['creations_passed'] = $this->creations_model->get_all('past', NULL);
			$this->render('creations_list');
		}

		public function homepage(){
			$this->data['slides'] = $this->creations_model->get_slides();
			$this->data['creations'] = $this->creations_model->get_all(NULL, 2);
			$this->render('home');
		}

		public function show($slug){

			$this->data['creation'] = $this->creations_model->get_one($slug);

			if(!$this->data['creation']){
				show_404();
			}
			$this->render('creation_show');

		}
		
	}