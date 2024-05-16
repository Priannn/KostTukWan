<?php 

class register extends Controller {
    public function index()
    {
        $data['judul'] = 'register';
        // $this->view('templates/header', $data);
        $this->view('register/index', $data);
        // $this->view('templates/footer');
    }
    public function tambah()
    {
        if ($this->model('register_Model')->TambahDataRegister($_POST) > 0) {
            header('Location:' . BASEURL . '/login');
            exit;
        }
    }
}
?>
