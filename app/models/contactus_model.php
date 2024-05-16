<?php
class contactus_model{
   private $table = "contact_us";
   private $db;
   public function __construct()
 {
    $this->db = new database;}  
    public function getAlldatacontact()
    {
        $this->db->query('SELECT * FROM ' . $this ->table);
        return $this->db->resultSet();
    }
    public function getcontactById($id_contact)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_contact = :id_contact');
        $this->db->bind('id_contact',$id_contact);
        return $this->db->single();
    }
    public function tambahContactUs($data)
    {
        $query = "INSERT INTO contact_us VALUES (null, :nama, :email, :message)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('message', $data['message']);
        
    
    // $this->db->execute();
        return $this->db->rowCount();

    }
}