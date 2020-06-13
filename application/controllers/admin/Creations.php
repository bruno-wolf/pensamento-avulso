<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Creations extends MY_Controller {
		
		public function __construct(){
			parent:: __construct();
      $this->ui = 'admin';
      $this->load->model('creations_model');
      $this->check_login();
		}

    public function index(){
      $this->data['creations'] = $this->creations_model->get_all_admin();
      return $this->render('admin/creations_list');
    }

    public function edit($id){
      $this->data['creation'] = $this->creations_model->get_one_admin($id);
      if(!$this->data['creation']){
        show_404();
      }
      $this->data['artists'] = $this->creations_model->list_artists();
      return $this->render('admin/creation_edit');
    }

    public function update($id){
      
      $data = array(
        'title' => $this->input->post('title'),
        'date_start' => $this->input->post('date_start'),
        'date_end' => $this->input->post('date_end'),
        'pt_summary' => $this->input->post('pt_summary'),
        'en_summary' => $this->input->post('en_summary'),
        'pt_text' => $this->input->post('pt_text'),
        'en_text' => $this->input->post('en_text'),
        'pt_credits' => $this->input->post('pt_credits'),
        'en_credits' => $this->input->post('en_credits'),
        'artist_id' => $this->input->post('artist'),
        'image' => $this->input->post('hidden_image'),
        'slug' => url_title( convert_accented_characters($this->input->post('title'))),
        'publish' => $this->input->post('publish')
      );

      $config['upload_path'] = 'assets/img/';
      $config['filename'] = 'image-'.time();
      $config['allowed_types'] = 'gif|jpg|png';

      $this->load->library('upload', $config);

      if( $this->upload->do_upload('image')) {
        $data['image'] = $this->upload->data('file_name');
      }

      $this->db->where('id', $id);

      if($this->db->update('creations', $data)){
        $this->session->set_flashdata('msg', 'Descansa! Actualizamos tudo!');
        redirect('admin/criacoes');
      };

    }

    public function new(){
      $this->data['artists'] = $this->creations_model->list_artists();
      $this->render('admin/creation_new');
    }

    public function add(){
      $data = array(
        'title' => $this->input->post('title'),
        'artist_id' => $this->input->post('artist'),
        'date_start' => $this->input->post('date_start'),
        'date_end' => $this->input->post('date_end'),
        'pt_summary' => $this->input->post('pt_summary'),
        'en_summary' => $this->input->post('en_summary'),
        'pt_text' => $this->input->post('pt_text'),
        'en_text' => $this->input->post('en_text'),
        'pt_credits' => $this->input->post('pt_credits'),
        'en_credits' => $this->input->post('en_credits'),
        'image' => $this->input->post('image'),
        'slug' => url_title( convert_accented_characters($this->input->post('title'))),
        'publish' => $this->input->post('publish')
      );

      $config['upload_path'] = 'assets/img/';
      $config['filename'] = 'image-'.time();
      $config['allowed_types'] = 'gif|jpg|png'; 

      $this->load->library('upload', $config);

      if( $this->upload->do_upload('image')) {
        $data['image'] = $this->upload->data('file_name');
      }

      if($this->db->insert('creations', $data)){
        $this->session->set_flashdata('msg', 'Nova criação melhor cultura');
        redirect('admin/criacoes');
      };
    }

    public function delete($id){
      $this->db->where('id', $id);
      if($this->db->delete('creations')){
        $this->session->set_flashdata('msg', 'a arte nunca se apaga...');
        redirect('admin/criacoes');
      };
    }
  }