<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dosen extends CI_Controller {
    public function index(){
        $this->load->model('dosen_model','dosen');
        $list_dsn = $this->dosen->getAll();
        $data['list_dsn'] = $list_dsn;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/index',$data);
        $this->load->view('layout/footer');
    }

    public function view(){
        $nidn = $this->input->get('nidn');
        $this->load->model('dosen_model', 'dosen');

        $data ['dosen'] = $this->dosen->findById($nidn);
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/view',$data);
        $this->load->view('layout/footer');

    }

    public function create(){
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/create');
        $this->load->view('layout/footer');

    }

    public function save(){
        $this->load->model('dosen_model','dosen');

        $_nidn = $this->input->post('nidn');
        $_nama = $this->input->post('nama');
        $_gender = $this->input->post('gender');
        $_tmpt_lahir = $this->input->post('tmpt_lahir');
        $_tgl_lahir = $this->input->post('tgl_lahir');
        $_pendidikan_akhir = $this->input->post('pendidikan_akhir');
        $_kode_prodi = $this->input->post('kode_prodi');
        $_nidnedit = $this->input->post('nidnedit');

        $data_dsn[] = $_nidn ;
        $data_dsn[] = $_nama ;
        $data_dsn[] = $_gender ;
        $data_dsn[] = $_tmpt_lahir ;
        $data_dsn[] = $_tgl_lahir ;
        $data_dsn[] = $_pendidikan_akhir ;
        $data_dsn[] = $_kode_prodi ;

        if (isset($_nidnedit)){
            $data_dsn[] = $_nidnedit;
            $this->dosen->update($data_dsn);

        }else {
            $this->dosen->save($data_dsn);
        }

        redirect(base_url().'index.php/dosen/view?nidn='.$_nidn, 'refresh');

    }

    public function edit(){
        $_nidn = $this->input->get('nidn');
        $this->load->model('dosen_model','dosen');
        $dsn_edit = $this->dosen->findById($_nidn);

        $data['dsn_edit'] =$dsn_edit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/update', $data);
        $this->load->view('layout/footer');
    }

    public function delete(){
        $_nidn = $this->input->get('nidn');
        $this->load->model('dosen_model','dosen');
        $dsn_edit = $this->dosen->findById($_nidn);
        $this->dosen->delete($_nidn);
        redirect(base_url().'index.php/dosen', 'refresh');
    }

    // public function index()
    // {
    // $this->load->model('dosen_model','dsn1');
    // $this->dsn1->nidn='01001';
    // $this->dsn1->nama='Hana Yasmin';
    // $this->dsn1->gender='P';
    // $this->dsn1->matkul='Pemograman Web';

    // $this->load->model('dosen_model','dsn2');
    // $this->dsn2->nidn='01002';
    // $this->dsn2->nama='Isyaka Aditya Demas';
    // $this->dsn2->gender='L';
    // $this->dsn2->matkul='Statistika';

	// $this->load->model('dosen_model','dsn3');
    // $this->dsn3->nidn='01003';
    // $this->dsn3->nama='Siti Amdah';
    // $this->dsn3->gender='P';
    // $this->dsn3->matkul='UI/UX';

    // $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];
    // $data['list_dsn']=$list_dsn;
    // $this->load->view('layout/header');
    // $this->load->view('layout/sidebar');
    // $this->load->view('dosen/index',$data);
    // $this->load->view('layout/footer');
    // }

}

?>