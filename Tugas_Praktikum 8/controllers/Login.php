<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index(){

        $data = [];
		$this->load->view('login', $data);
	}

    public function otentikasi(){
        $this->load->model("user_model","user");
        $_usernae = $this->input->post('username');
        $_password = $this->input->post('password');
    }
}