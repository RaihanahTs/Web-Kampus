<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Prodi extends CI_Controller {
    public function index(){
        $this->load->model('prodi_model','prodi');
        $list_prodi = $this->prodi->getAll();
        $data['list_prodi'] = $list_prodi;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('prodi/index',$data);
        $this->load->view('layout/footer');
    
    }
    public function view(){
        $kode = $this->input->get('kode');
        $this->load->model('prodi_model', 'prodi');
        $data ['prodi'] = $this->prodi->findById($kode);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('prodi/view',$data);
        $this->load->view('layout/footer');

    }
    public function create(){
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('prodi/create');
        $this->load->view('layout/footer');

    }

    public function save(){
        $this->load->model('prodi_model','prodi');

        $_kode = $this->input->post('kode');
        $_nama = $this->input->post('nama_prodi');
        $_kaprodi = $this->input->post('kaprodi');
        $_kode_edit = $this->input->post('kode_edit');

        $data_prodi[] = $_kode ;
        $data_prodi[] = $_nama ;
        $data_prodi[] = $_kaprodi ;

        if (isset($_kode_edit)){
            $data_prodi[] = $_kode_edit;
            $this->prodi->update($data_prodi);

        }else {
            $this->prodi->save($data_prodi);
        }
        redirect(base_url().'index.php/prodi/view?kode='.$_kode, 'refresh');

    }
    public function edit(){
        $_kode = $this->input->get('kode');
        $this->load->model('prodi_model','prodi');
        $prodi_edit = $this->prodi->findById($_kode);

        $data['prodi_edit'] =$prodi_edit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('prodi/update', $data);
        $this->load->view('layout/footer');
    }

    public function delete(){
        $_kode = $this->input->get('kode');
        $this->load->model('prodi_model','prodi');
        $prodi_edit = $this->prodi->findById($_kode);
        $this->prodi->delete($_kode);
        redirect(base_url().'index.php/prodi', 'refresh');
    }
}

?>