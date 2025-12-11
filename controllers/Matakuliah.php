<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Matakuliah extends CI_Controller {
    public function index()
    {
    $this->load->model('matakuliah_model','matkul1');
    $this->matkul1->id=1;
    $this->matkul1->matakuliah='Pemograman Web';
    $this->matkul1->waktu='Selasa, 08.00 - 10.00';
    $this->matkul1->dosen='Hana Yasmin';
    $this->matkul1->tempat='Kampus A STT NF';

    $this->load->model('matakuliah_model','matkul2');
    $this->matkul2->id=2;
    $this->matkul2->matakuliah='Statistika';
    $this->matkul2->waktu='Kamis, 08.00 - 11.00';
    $this->matkul2->dosen='Isyaka Aditya Demas';
    $this->matkul2->tempat='Kampus B STT NF';

    $this->load->model('matakuliah_model','matkul3');
    $this->matkul3->id=2;
    $this->matkul3->matakuliah='UI/UX';
    $this->matkul3->waktu='Jumat, 13.00 - 15.00';
    $this->matkul3->dosen='Siti Amdah';
    $this->matkul3->tempat='Kampus B STT NF';


    $list_matkul = [$this->matkul1, $this->matkul2, $this->matkul3];
    $data['list_matkul']=$list_matkul;
    $this->load->view('layout/header');
    $this->load->view('layout/sidebar');
    $this->load->view('matakuliah/index',$data);
    $this->load->view('layout/footer');
    }
}

?>