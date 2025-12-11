<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mahasiswa extends CI_Controller {
    public function index(){
        $this->load->model('mahasiswa_model','mahasiswa');
        $list_mhs = $this->mahasiswa->getAll();
        $data['list_mhs'] = $list_mhs;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mahasiswa/index',$data);
        $this->load->view('layout/footer');
    }

    public function view(){
        $nim = $this->input->get('nim');
        $this->load->model('mahasiswa_model', 'mahasiswa');
        $data ['mhs'] = $this->mahasiswa->findById($nim);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mahasiswa/view',$data);
        $this->load->view('layout/footer');

    }

    public function create(){
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mahasiswa/create');
        $this->load->view('layout/footer');

    }

    public function save(){
        $this->load->model('mahasiswa_model','mahasiswa');

        $_nim = $this->input->post('nim');
        $_nama = $this->input->post('nama');
        $_gender = $this->input->post('gender');
        $_tmpt_lahir = $this->input->post('tmpt_lahir');
        $_tgl_lahir = $this->input->post('tgl_lahir');
        $_prodi = $this->input->post('prodi');
        $_ipk = $this->input->post('ipk');
        $_idedit = $this->input->post('idedit');

        $data_mhs[] = $_nim ;
        $data_mhs[] = $_nama ;
        $data_mhs[] = $_gender ;
        $data_mhs[] = $_tmpt_lahir ;
        $data_mhs[] = $_tgl_lahir ;
        $data_mhs[] = $_prodi ;
        $data_mhs[] = $_ipk ;

        if (isset($_idedit)){
            $data_mhs[] = $_idedit;
            $this->mahasiswa->update($data_mhs);

        }else {
            $this->mahasiswa->save($data_mhs);
        }

        redirect(base_url().'index.php/mahasiswa/view?nim='.$_nim, 'refresh');

    }

    public function edit(){
        $_id = $this->input->get('nim');
        $this->load->model('mahasiswa_model','mahasiswa');
        $mhs_edit = $this->mahasiswa->findById($_id);

        $data['mhs_edit'] =$mhs_edit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mahasiswa/update', $data);
        $this->load->view('layout/footer');
    }

    public function delete(){
        $_id = $this->input->get('nim');
        $this->load->model('mahasiswa_model','mahasiswa');
        $mhs_edit = $this->mahasiswa->findById($_id);
        $this->mahasiswa->delete($_id);
        redirect(base_url().'index.php/mahasiswa', 'refresh');
    }

    // public function index()
    // {
    // $this->load->model('mahasiswa_model','mhs1');
    // $this->mhs1->id=1;
    // $this->mhs1->nim='010001';
    // $this->mhs1->nama='Faiz Fikri';
    // $this->mhs1->gender='L';
    // $this->mhs1->ipk=3.85;

    // $this->load->model('mahasiswa_model','mhs2');
    // $this->mhs2->id=2;
    // $this->mhs2->nim='020001';
    // $this->mhs2->nama='Pandan Wangi';
    // $this->mhs2->gender='P';
    // $this->mhs2->ipk=3.35;

    // $list_mhs = [$this->mhs1, $this->mhs2];
    // $data['list_mhs']=$list_mhs;
    // $this->load->view('layout/header');
    // $this->load->view('layout/sidebar');
    // $this->load->view('mahasiswa/index',$data);
    // $this->load->view('layout/footer');
    // }

    // public function create(){
    //     $data['judul']='Form Kelola Mahasiswa';
    //     $this->load->view('layout/header');
    //     $this->load->view('layout/sidebar');
    //     $this->load->view('mahasiswa/create',$data);
    //     $this->load->view('layout/footer');
    // }

    // public function save(){
    //     $this->load->model('mahasiswa_model','mhs1');
    //     $this->mhs1->nim = $this->input->post('nim');
    //     $this->mhs1->nama = $this->input->post('nama');
    //     $this->mhs1->gender = $this->input->post('gender');
    //     $this->mhs1->tmpt_lahir = $this->input->post('tmpt_lahir');
    //     $this->mhs1->tggl_lahir = $this->input->post('tggl_lahir');
    //     $this->mhs1->prodi = $this->input->post('prodi');
    //     $this->mhs1->ipk = $this->input->post('ipk');

    //     $data['mhs1']=$this->mhs1;
    //     $this->load->view('layout/header');
    //     $this->load->view('layout/sidebar');
    //     $this->load->view('mahasiswa/view',$data);
    //     $this->load->view('layout/footer');
    // }

    
}

?>