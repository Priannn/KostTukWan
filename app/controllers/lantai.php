<?php 

class lantai extends Controller {
    public function index()
    {
        $data['judul'] = 'Daftar Lantai';
        $data['lnt'] = $this->model('Lantai_model')->getalldatalantai();
        $this->view('templates/header', $data);
        $this->view('lantai/index', $data);
        $this->view('templates/footer');
    }
    public function tambahLantai() {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Ambil data dari form
        $data = [
            'Lantai' => $_POST['Lantai'],
            'lemari' => $_POST['lemari'],
            'gambar_kamar' => $_POST['gambar_kamar'],
            'stok' => $_POST['stok'],
            'harga' => $_POST['harga'],
            'no_whatsapp' => $_POST['no_whatsapp'],
            'pax' => $_POST['pax'],
            'luastemti' => $_POST['luastemti'],
            'kamarmandi' => $_POST['kamarmandi'],
            'sprei' => $_POST['sprei'],
            'kloset' => $_POST['kloset'],
            'jendela' => $_POST['jendela'],
            'bantal' => $_POST['bantal']
        ];

        // Panggil model untuk menambahkan data
       $lantaiModel = $this->model('Lantai_model');
        $stmt = $lantaiModel->tambahkanblog($data);

        // Periksa apakah query berhasil dieksekusi
        if ($stmt) {
            // Jika berhasil, arahkan pengguna ke halaman yang sesuai
            header('Location: ' . BASEURL . '/Lantai');
        } else {
            // Jika terjadi kesalahan, tampilkan pesan kesalahan
            die('Gagal menambahkan data lantai');
        }
    } 
}

public function lantaii ($data){
    if ($this->model('Lantai_model')->tambahkanblog($data) > 0) {
        header('Location: ' . BASEURL . '/Lantai');
        exit;
        
    }
}

// Fungsi Delete
public function delete($id)
{
    if ($this->model('Lantai_model')->hapusblog($id) > 0) {
        header('Location: ' . BASEURL . '/Lantai');
        exit;
    }
}



public function editTempat($id)
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $Lantai = $_POST['Lantai'];    
        $lemari = $_POST['lemari'];
        $gambar_kamar = '';
        $stok = $_POST['stok'];
        $harga = $_POST['harga'];
        $no_whatsapp = $_POST['no_whatsapp'];
        $pax = $_POST['pax'];
        $luastemti = $_POST['luastemti'];
        $kamarmandi = $_POST['kamarmandi'];
        $sprei = $_POST['sprei'];
        $kloset = $_POST['kloset'];
        $jendela = $_POST['jendela'];
        $bantal = $_POST['bantal'];


        // Periksa apakah pengguna memilih untuk mengunggah gambar baru
        if (isset($_FILES['gambar_kamar']) && $_FILES['gambar_kamar']['error'] === UPLOAD_ERR_OK) {
            // Pengguna memilih untuk mengunggah gambar baru
            $gambar_kamar = $this->handleImageUpload($_FILES['gambar_kamar']);
        } else {
            // Pengguna tidak memilih gambar baru, gunakan gambar lama
            $gambar_kamar = $_POST['old_image'];
        }

        // Panggil fungsi model untuk melakukan pembaruan
        if ($this->model('Lantai_model')->updatetempatwisata($id_lantai, $Lantai, $lemari, $gambar_kamar, $stok, $harga, $no_whatsapp, $pax, $luastemti, $kamarmandi, $sprei, $kloset, $jendela, $bantal)) {
            // Redirect or show success message
            header('Location: ' . BASEURL . '/Lantai');

        } else {
            echo 'Gagal melakukan pembaruan.';      
        }
    } else {
        // Load the form for updating the trip
        $Lantai = $this->model('lantai_model')->getTempatWisataById($id_lantai);
        $data = [
            'lantai_model' => $Lantai,
        ];

        $data['judul'] = 'Edit Data Kost';
        $this->view('Lantai/edit', $data);

    }
}

private function handleImageUpload($file)
{
    $image_name = $file['name'];
    $tmp_image = $file['tmp_name'];
    $target_directory = $_SERVER['DOCUMENT_ROOT'] . '/PWPB MVC/public/img/';
    $target_file = $target_directory . $image_name;

    // Handle image upload
    if (move_uploaded_file($tmp_image, $target_file)) {
        // Return the image path
        return '/phpmvc/public/img/' . $image_name;
    } else {
        // Return an empty string if the upload fails
        return '';
    }
}

}