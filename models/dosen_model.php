<?php
    class Dosen_model extends CI_Model {
        // public $nidn;
        // public $nama;
        // public $gender;
        // public $matkul;
        
        private $table = "dosen";

        public function getAll(){
            $query = $this->db->get($this->table);
            return $query->result(); 
        }
        
        public function findById($id){
            $this->db->where("nidn", $id);
            $query = $this->db->get($this->table);
            return $query->row();
        }

        public function save($data){
            $sql = "INSERT INTO dosen (nidn, nama, gender, tmpt_lahir, tgl_lahir, pendidikan_akhir, kode_prodi) VALUES (?,?,?,?,?,?,?)";
            $this->db->query($sql,$data);
        }

        public function update($data){
            $sql = "UPDATE dosen SET nidn=?, nama=?, gender=?, tmpt_lahir=?, tgl_lahir=?, pendidikan_akhir=?, kode_prodi=? WHERE nidn=?";
            $this->db->query($sql,$data);
        }

        public function delete($nidn){
            $sql = "DELETE FROM dosen WHERE nidn=?";
            $this->db->query($sql,array($nidn));
        }
    
    }

?>