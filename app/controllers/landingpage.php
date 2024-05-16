<?php 

class landingpage extends Controller {
    public function index()
    {
        
        $data['judul'] = 'Kost Tuk Wan';
        $data['lnt'] = $this->model('Lantai_model')->getalldatalantai();
        $this->view('landingpage/index', $data);
    }

    public function lantaik()
    {
        $data['lnt'] = $this->model('Lantai_model')->getalldatalantai();
        $data['judul'] = 'Kost Tuk Wan';
        $this->view('templates/header-user', $data);
        $this->view('landingpage/lantaik', $data);
        $this->view('templates/footer');
       
    }
}