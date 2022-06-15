<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi extends CI_Controller {

    public function index(){

        $this->load->model('prodi_model', 'prodi');
        $list_prodi = $this->prodi->getAll();

        $data['list_prodi'] = $list_prodi;
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('prodi/index', $data);
        $this->load->view('footer');
	}

    public function save(){
        $this->load->model('prodi_model', 'prodi');
        $_kode = $this->input->post('kode');
        $_nama = $this->input->post('nama');
        $_kaprodi = $this->input->post('kaprodi');
        $_idedit = $this->input->post('idedit'); //hidden field


        $data_prd[]=$_kode;
        $data_prd[]=$_nama;
        $data_prd[]=$_kaprodi;

        if(isset($_idedit)){
            //update
            $data_prd[]=$_idedit;
            $this->prodi->update($data_prd);
        }else{
            //save data baru
            $this->prodi->save($data_prd);
        }

        redirect(base_url().'index.php/prodi/index', 'refresh');

    }

    public function edit(){
        $_id = $this->input->get('id');
        $this->load->model('prodi_model', 'prodi');

        $prdedit = $this->prodi->findById($_id);

        $data['judul']='Form Kelola Prodi';
        $data['prdedit']=$prdedit;

        $this->load->view('header');
        $this->load->view('sidebar');
        $this->load->view('form/update_prd',$data);
        $this->load->view('footer');
    }
}