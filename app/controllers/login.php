<?php 

class login extends Controller {
    public function index()
    {
        $data['judul'] = 'login';
         //$this->view('templates/header', $data);
        $this->view('login/index');
         //$this->view('templates/footer');
    }
    public function userr()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        if( !empty($email) || !empty($password)){
            
            if( $this->model('login_model')->cekUserTrue($email) > 0 ){
                $data = $this->model('login_model')->ambilDataUser($email);
                $emailDB = $data['email'];
                // $passwordDB = password_hash($data['password'], PASSWORD_DEFAULT);
                $passwordDB = $data['password'];
                var_dump($email, $password,$passwordDB);
     
                if(password_verify( $password, $passwordDB)) {
                    $_SESSION['password'] = $passwordDB;
                    $_SESSION['email'] = $emailDB;
                    // $_SESSION['userLogin'] = 'userLogin';
                    // header('Location: '. BASEURL .'/about');
                    
                    $_SESSION['akses'] = $data['akses'];
                    if($_SESSION['akses'] == 'admin'){
                        header('Location: '. BASEURL.'/Lantai');
                        
                    }else{
                        
                        header('Location: '. BASEURL .'/landingpage');
                    }
                    
                }else{
                    echo 'password salah';
                }
            }else{
                header('Location: '. BASEURL .'/login');
                echo 'Gagal menemukan user';
                
            }
        }else{
            echo ' Masukan data terlebih dahulu';
        }
    }
    public function logout(){
        session_start();
        $_SESSION = [];
        session_unset();
        session_destroy();

        header('location: '. BASEURL . '/login');
    }
    
    
    public function prosesLogout(){
    session_start();
    session_destroy();

    header('Location: ' . BASEURL . '/login');
    exit();
    }
   
}