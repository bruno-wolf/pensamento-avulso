<?php 

	class MY_Controller extends CI_Controller{

		public $data = array();
		public $ui = 'frontend';
		public $language;
		
		function __construct(){
			parent::__construct();

			$this->language = $this->check_language();
			$this->lang->load('site', $this->language);
		}
	
		public function render($page){

			if($this->ui == 'frontend'){

				// load menu
				$this->load->model('artists_model');
				$this->data['menu'] = $this->artists_model->get_menu();

				$this->load->view('header', $this->data);
				$this->load->view($page, $this->data);
				$this->load->view('footer', $this->data);

			}else{

				$this->load->view('admin/header', $this->data);
				$this->load->view($page, $this->data);
				$this->load->view('admin/footer', $this->data);

			}

		}

		public function check_login(){
			$user = $this->session->userdata('username');
			
			if(!$user){
				redirect('admin/');
			}
		}

		protected function check_language(){
			$language = $this->session->userdata('language');
			if($language){
				return $language;		
			}
			return 'pt';

			// humm... deixa lá testar se dá para encolher isto com um operador ternário
			// ($language) ? $language = $language : $language = 'pt';
			// return $language;
			// ...bolas! está a escapar-me aqui qualquer coisa, mas não posso perder tempo com isto.
		}

		public function switch_language($lang){
			$this->session->set_userdata('language', $lang);
			redirect($_SERVER['HTTP_REFERER']);

		}

}