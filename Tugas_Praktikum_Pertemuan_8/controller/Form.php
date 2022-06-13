<?php
    defined('BASEPATH') OR exit('No direct script access allowe
    d');
    class Form extends CI_Controller {

        public function form_mhs(){
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