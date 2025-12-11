<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Registrasi extends CI_Controller {
    public function index(){

        $this->load->view('registrasi');
    }

    public function save(){
        $this->load->model('user_model','user');

        $_username = $this->input->post('username');
        $_password = $this->input->post('password');
        $_email = $this->input->post('email');

        $data_user[] = $_username ;
        $data_user[] = 'MAHASISWA' ;
        $data_user[] = $_email ;
        $data_user[] = $_password ;

        $this->user->registrasi($data_user);
        redirect(base_url().'index.php/login');

    }
    

}
