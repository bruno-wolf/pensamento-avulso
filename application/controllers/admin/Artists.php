<?php

	class Artists extends MY_Controller {
		
		public function __construct(){
			parent:: __construct();
      $this->ui = 'admin';
      $this->load->model('artists_model');
      $this->check_login();
		}

    public function index(){
      $this->data['artists'] = $this->artists_model->get_all_admin();
      return $this->render('admin/artists_list');
    }

    public function edit($id){
      $this->data['artist'] = $this->artists_model->get_one_admin($id);
      if(!$this->data['artist']){
        show_404();
      }
      return $this->render('admin/artist_edit');
    }
    
    public function update($id){
      $data = array(
        'name' => $this->input->post('name'),
        'pt_text' => $this->input->post('pt_text'),
        'en_text' => $this->input->post('en_text'),
        'image' => $this->input->post('hidden_image'),
        'slug' => url_title( convert_accented_characters($this->input->post('name'))),
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

      if($this->db->update('artists', $data)){
        $this->session->set_flashdata('msg', 'Descansa! Actualizamos tudo!');
        redirect('admin/artistas');
      };

    }

    public function new(){
      $this->render('admin/artist_new');
    }

    public function add(){
      $data = array(
        'name' => $this->input->post('name'),
        'pt_text' => $this->input->post('pt_text'),
        'en_text' => $this->input->post('en_text'),
        'image' => $this->input->post('image'),
        'date_added' => $this->input->post('date_added'),
        'slug' => url_title( convert_accented_characters($this->input->post('name'))),
        'publish' => $this->input->post('publish')
      );

      $config['upload_path'] = 'assets/img/';
      $config['filename'] = 'image-'.time();
      $config['allowed_types'] = 'gif|jpg|png'; 

      $this->load->library('upload', $config);

      if( $this->upload->do_upload('image')) {
        $data['image'] = $this->upload->data('file_name');
      }

      if($this->db->insert('artists', $data)){
        $this->session->set_flashdata('msg', 'Novo Artigo!! És um/a Bravo/a!!!');
        redirect('admin/artistas');
      };
    }

    public function delete($id){
      $this->db->where('id', $id);
      if($this->db->delete('artists')){
        $this->session->set_flashdata('msg', 'Um artista nunca desaparece...');
        redirect('admin/artistas');
      };
    }

  }