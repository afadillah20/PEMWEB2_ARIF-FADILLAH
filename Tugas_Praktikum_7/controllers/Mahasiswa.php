<?php
    defined('BASEPATH') OR exit('No direct script access allowe
    d');
    class Mahasiswa extends CI_Controller {
        public function index(){
            $this->load->model('Mahasiswa_model','mhs1');
            $this->mhs1->id=1;
            $this->mhs1->nim='010001';
            $this->mhs1->nama='Faiz Fikri';
            $this->mhs1->gender='L';
            $this->mhs1->ipk=3.85;
            
            $this->load->model('Mahasiswa_model','mhs2');
            $this->mhs2->id=2;
            $this->mhs2->nim='020001';
            $this->mhs2->nama='Pandan Wangi';
            $this->mhs2->gender='P';
            $this->mhs2->ipk=3.35;
            
            $list_mhs = [$this->mhs1, $this->mhs2];
            $data['list_mhs']=$list_mhs;
            // $this->load->view('header');
            $this->load->view('mahasiswa/index',$data);
            // $this->load->view('footer');
        }

        public function create(){

            $this->load->view('form');
        }

        public function store(){


            $nim = $this->input->post('nim');
            $nama = $this->input->post('nama');
            $gender = $this->input->post('gender');
            $tmp_lahir = $this->input->post('tmp_lahir');
            $tgl_lahir = $this->input->post('tgl_lahir');
            $ipk = $this->input->post('ipk');

            $data = array(
                'nim' => $nim,
                'nama' => $nama,
                'gender' => $gender,
                'tmp_lahir' => $tmp_lahir,
                'tgl_lahir' => $tgl_lahir,
                'ipk' => $ipk
            );
            // $data['mahasiswa'] = $data;
            $this->load->view('hasil', $data);


        }
    }
?>