<?php
    defined('BASEPATH') OR exit('No direct script access allowe
    d');
    class Mahasiswa extends CI_Controller {

        public function form_mhs(){
            $this->load->view('form/form_mhs');
        }
    }