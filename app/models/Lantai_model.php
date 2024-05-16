<?php
class Lantai_model{
   
   private $table = "lantai";
   private $db;

   public function __construct()
   {
    $this->db = new database;
   }
       
    public function getAlldatalantai()
    {
        $this->db->query('SELECT * FROM ' . $this ->table);
        return $this->db->resultSet();
    }

    public function getlantaiById($id_lantai)
    {
        $this->db->query('SELECT * FROM ' . $this->table . 'WHERE id_lantai = :id_lantai');
        $this->db->bind('id_lantai',$id_lantai);
        return $this->db->single();
    }

    public function tambahkanblog($data)
    {
        $query = "INSERT INTO lantai VALUES ('', :Lantai, :lemari, :gambar_kamar, :stok, :harga, :no_whatsapp, :pax, :luastemti, :kamarmandi, :sprei, :kloset, :jendela, :bantal)";
        $this->db->query($query);
        $this->db->bind('Lantai', $data['Lantai']);
        $this->db->bind('lemari', $data['lemari']);
        $this->db->bind('gambar_kamar', $data['gambar_kamar']);
        $this->db->bind('stok', $data['stok']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('no_whatsapp', $data['no_whatsapp']);
        $this->db->bind('pax', $data['pax']);
        $this->db->bind('luastemti', $data['luastemti']);
        $this->db->bind('kamarmandi', $data['kamarmandi']);
        $this->db->bind('sprei', $data['sprei']);
        $this->db->bind('kloset', $data['kloset']);
        $this->db->bind('jendela', $data['jendela']);
        $this->db->bind('bantal', $data['bantal']);
        
    
    //   $this->db->execute();
        return $this->db->rowCount();

    }

    // Funsi Delete

    public function hapusblog($id_lantai)
    {
        $query = "DELETE FROM lantai WHERE id_lantai = :id_lantai";
        $this->db->query($query);
        $this->db->bind(':id_lantai', $id_lantai);
        // $this->db->execute();
        return $this->db->rowCount();
    }

    public function updatetempatwisata($id_lantai, $Lantai, $lemari, $gambar_kamar, $stok, $harga, $no_whatsapp, $pax, $luastemti, $kamarmandi, $sprei, $kloset, $jendela, $bantal)
    {
        $this->db->query('UPDATE lantai SET Lantai = :Lantai, lemari = :lemari, gambar_kamar = :gambar_kamar, stok = :stok, harga = :harga, no_whatsapp = :no_whatsapp, pax = :pax, luastemti = :luastemti, kamarmandi = :kamarmandi, sprei = :sprei, kloset = :kloset, jendela = :jendela, bantal = :bantal WHERE id_lantai = :id_lantai');
        var_dump($gambar_kamar);

        $this->db->bind(':id_lantai', $id_lantai);
        $this->db->bind(':Lantai', $Lantai);
        $this->db->bind(':lemari', $lemari);
        $this->db->bind(':gambar_kamar', $gambar_kamar);
        $this->db->bind(':stok', $stok);
        $this->db->bind(':harga', $harga);
        $this->db->bind(':no_whatsapp', $no_whatsapp);
        $this->db->bind(':pax', $pax);
        $this->db->bind(':luastemti', $luastemti);
        $this->db->bind(':kamarmandi', $kamarmandi);
        $this->db->bind(':sprei', $sprei);
        $this->db->bind(':kloset', $kloset);
        $this->db->bind(':jendela', $jendela);
        $this->db->bind(':bantal', $bantal);
    
        // Eksekusi query
        // $this->db->execute();
        return $this->db->rowCount();
    }

    
}
?>
