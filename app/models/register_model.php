<?php

class register_model{
    private $table = 'logress';
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    // public function getAllUsers(){
    //     $this->db->query('SELECT * FROM ' . $this->table);
    //     return $this->db->resultset();
    //  }
    public function TambahDataRegister($data)
    {
        $query = "INSERT INTO logress VALUES ('', :uname, :fullname, :born, :phone, :email, :password, :akses)";
    
        $this->db->query($query);
        $this->db->bind('uname', $data['uname']);
        $this->db->bind('fullname', $data['fullname']);
        $this->db->bind('born', $data['born']);
        $this->db->bind('phone', $data['phone']);
        
        $this->db->bind('email', $data['email']);
        
        $hashedPassword = password_hash($data['password'], PASSWORD_DEFAULT);
        $this->db->bind('password', $hashedPassword);
        $this->db->bind('akses', 'user');
        
        return $this->db->rowCount();
    }
    

} 
?>