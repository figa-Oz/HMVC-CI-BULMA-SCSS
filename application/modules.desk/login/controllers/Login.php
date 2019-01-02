<?php if(!defined('BASEPATH')) exit('Tidak ada akses langsung yang diizinkan');

class Login extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->library(array('form_validation','session'));
    $this->load->database();
    $this->load->helper('url');
    $this->load->model('M_login');
  }

  public function index(){
    $session = $this->session->userdata('isLogin');
    if($session == FALSE){
      redirect('login/login_form');
    }else{
      redirect('dashboard');
    }
  }

  public function login_form(){
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
    $this->form_validation->set_error_delimiters('<span class="error">', '</span>');
    if($this->form_validation->run()==FALSE){
      $this->load->view('form_login');
    }else{
      $username = $this->input->post('username');
      $password = md5($this->input->post('password'));
      $cek = $this->M_login->takeUser($username, $password, 1);
      if($cek <> 0){
        $this->session->set_userdata('isLogin', TRUE);
        $this->session->set_userdata('username',$username);
        redirect('dashboard');
      }else{
        echo
        "<script>
          alert('Failed Login: Check your username and password!');
          history.go(-1);
        </script>";
      }
    }
  }

  public function logout(){
    $this->session->sess_destroy();
    redirect('login/login_form');
  }
}
