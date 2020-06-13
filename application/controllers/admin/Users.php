<?php

	class Users extends MY_Controller{
    function __construct(){
      parent:: __construct();
      $this->ui = 'admin';
      $this->load->model('users_model');
    }

    public function index(){
      $this->check_login();
      $this->data['users'] = $this->users_model->get_all_admin();
      return $this->render('admin/users_list');
    }

    public function new(){
      $this->check_login();
      $this->render('admin/user_new');
    }

    public function add(){
      $this->check_login();
      $data = array(
        'username' => $this->input->post('user'),
        'date_added' => $this->input->post('date_added'),
        'publish' => $this->input->post('publish')
      );

      $username = $data['username'];

      $q="SELECT * FROM users ORDER BY id ASC";
      $q="SELECT * FROM users WHERE username = '$username'";
      $user = $this->db->query($q)->row_array();  

      if($user){
        $this->session->set_flashdata('msg', 'Este makako não me é estranho!');
        redirect('admin/utilizadores');
      }

      $password =$this->input->post('pass');

      if($password){
        $password_encrypted = password_hash($password, PASSWORD_DEFAULT);
        $data['password'] = $password_encrypted;
      }

      if($this->db->insert('users', $data)){
        $this->session->set_flashdata('msg', 'Bora lá usar o site makako');
        redirect('admin/utilizadores');
      };
    }

    public function edit($id){
      $this->check_login();
      $this->data['item'] = $this->users_model->get_one_admin($id);
      if(!$this->data['item']){
        show_404();
      }
      return $this->render('admin/user_edit');
    }

    public function update($id){
      $this->check_login();
      $data = array(
        'username' => $this->input->post('user'),
        'date_added' => $this->input->post('date_added'),
        'publish' => $this->input->post('publish')
      );

      $password =$this->input->post('pass');

      if($password){
        $password_encrypted = password_hash($password, PASSWORD_DEFAULT);
        $data['password'] = $password_encrypted;
      }

      $this->db->where('id', $id);

      if($this->db->update('users', $data)){
        $this->session->set_flashdata('msg', 'Yeah, yeah! Makako actualizado!');
        redirect('admin/utilizadores');
      };

    }

    public function delete($id){
      $this->check_login();
      $this->db->where('id', $id);
      $this->db->delete('users'); 
      redirect('admin/utilizadores');
    }

    public function login(){
      $this->load->view('admin/login');
    }

    public function gologin(){
      $username = $this->input->post('user');
      $password = $this->input->post('pass');

      $q = "SELECT * FROM users WHERE username = '$username'";
      $user = $this->db->query($q)->row_array();

      if(!$user){
        $this->session->set_flashdata('msg', 'Então makakinho/a! Parece que ainda não estás registado/a');
        redirect('admin/');
      }

      if(!password_verify($password, $user['password'])){
        $this->session->set_flashdata('msg', 'Pequeno makakinho! Parece que não te recordas da tua password.');
        redirect('admin/');
      }

      $this->session->set_userdata('username', $username);
      redirect('admin/criacoes');
    }

    public function logout(){
      session_destroy();
      redirect('admin');
    }
  }