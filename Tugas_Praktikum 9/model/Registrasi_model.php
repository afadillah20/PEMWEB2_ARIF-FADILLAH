<?php 

class Registrasi_model extends CI_Model{

    public function save($data){
        $sql = 'INSERT INTO user (username,password,email,role)
        VALUES (?,md5(?),?,?)';
        $this->db->query($sql,$data);
    }
}
?>