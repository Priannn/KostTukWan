    <?php 

    class contactus extends Controller {
        public function index()
        {
            $data['judul'] = 'Contact Us';
            $data['cntu'] = $this->model('contactus_model')->getAlldatacontact();
            $this->view('templates/header', $data);
            $this->view('contactus/index');
            $this->view('templates/footer', $data);
        }
        public function tambah()
        {
            if ($this->model('contactus_model')->tambahContactUs($_POST) > 0) {
                header('Location:' . BASEURL . '/landingpage');
                exit;
            }
        }
    }