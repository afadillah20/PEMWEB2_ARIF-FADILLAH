<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

	public function mahasiswa(){
		$this->load->view('header');
        $this->load->view('sidebar');
        $this->load->view('form/form_mhs');
        $this->load->view('footer');
	}

    public function dosen(){
        $this->load->view('header');
        $this->load->view('sidebar');
        $this->load->view('form/form_dsn');
        $this->load->view('footer');
    }

    public function prodi(){
        $this->load->view('header');
        $this->load->view('sidebar');
        $this->load->view('form/form_prd');
        $this->load->view('footer');
    }

}