<?php
class User_model extends CI_Model {
    
    private $table = "user";

    public function getAll(){
        $query = $this->db->get($this->table);
        return $query->result(); 
    }
    
    public function findById($id){
        $this->db->where('nim', $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function login($uname, $pass){
        $sql = "SELECT * FROM user WHERE username = ? and password = MD5(?) ";
        $data = [$uname, $pass];
        $query = $this->db->query($sql, $data);
        return $query->row();
    }

    public function registrasi($data){
        $sql = "INSERT INTO user (username, role, email, password) VALUES (?,?,?,md5(?))";
        $this->db->query($sql,$data);
    }
}