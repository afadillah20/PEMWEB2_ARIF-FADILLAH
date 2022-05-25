<?php
    defined('BASEPATH') OR exit('No direct script access allowe
    d');
    class Matkul extends CI_Controller {
    // lengkapi
        public function index(){
            $this->load->model('Matkul_model','mtkl1');
            $this->mtkl1->nama='Pemrograman Web';
            $this->mtkl1->sks=3;
            $this->mtkl1->semester=2;

            $this->load->model('Matkul_model','mtkl2');
            $this->mtkl2->nama='Basis Data';
            $this->mtkl2->sks=3;
            $this->mtkl2->semester=2;

            $this->load->model('Matkul_model','mtkl3');
            $this->mtkl3->nama='Statistik dan Probabilitas';
            $this->mtkl3->sks=3;
            $this->mtkl3->semester=2;
            

            $list_mtkl = [$this->mtkl1, $this->mtkl2, $this->mtkl3];
            $data['list_mtkl']=$list_mtkl;
            $this->load->view('matkul/index', $data);
        }
    }
?>