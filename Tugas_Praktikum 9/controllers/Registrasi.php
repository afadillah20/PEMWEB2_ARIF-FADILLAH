<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {

	public function index(){
        $this->load->view('form/form_registrasi');
	}

	public function save(){
        $this->load->model('registrasi_model', 'user');
        $_username = $this->input->post('username');
        $_password = $this->input->post('password');
        $_email = $this->input->post('email');
		$_role = $this->input->post('role');

		$data_user[]=$_username;
        $data_user[]=$_password;
        $data_user[]=$_email;
		$data_user[]=$_role;

		$this->user->save($data_user);

		redirect(base_url().'index.php/login/index', 'refresh');
	}
}
?>