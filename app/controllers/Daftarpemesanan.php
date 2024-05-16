<?php 

class Daftarpemesanan extends Controller {
    public function index()
    {
        $data['judul'] = 'Daftar pemesan';
        $this->view('templates/header', $data);
        $this->view('Daftarpemesanan/index');
        $this->view('templates/footer', $data);
    }
}