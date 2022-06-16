<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index(){

        $data = [];
        $this->load->view('login/index', $data);
	}

    public function otentikasi(){
        $this->load->model("user_model","user");
        $_username = $this->input->post('username');
        $_password = $this->input->post('password');

        $row = $this->user->login($_username,$_password);
        if(isset($row)){
            //jika benar
            $this->session->set_userdata('USERNAME',$row->username);
            $this->session->set_userdata('ROLE',$row->role);
            $this->session->set_userdata('USER',$row);
            redirect(base_url().'index.php/dashboard/index');
        }else{
            //jika password salah
            redirect(base_url().'index.php/login/index');
        }
    }

    public function logout(){
        $this->session->unset_userdata('USERNAME');
        $this->session->unset_userdata('ROLE');
        $this->session->unset_userdata('USER');
        redirect(base_url().'index.php/login/index');

    }
}