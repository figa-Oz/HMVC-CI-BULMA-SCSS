<?php defined('BASEPATH') OR exit('Tidak ada akses langsung yang diizinkan');

class Dashboard extends CI_Controller {
	public function __construct(){
		parent::__construct();
		// if($this->session->userdata('status') != "login"){
		// 	redirect(base_url("login"));
		$this->load->library(array('form_validation','session'));
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('M_dashboard');
    $this->load->model('login/M_login');
	}

  // public function index(){
	// 	if($this->session->userdata('isLogin') == FALSE){
	// 		redirect('dashboard/login_form');
	// 	}else {
	// 		$this->load->model('M_dashboard');
	// 		$user = $this->session->userdata('username');
	// 		$data['level'] = $this->session->userdata('level');
	// 		$data['user'] = $this->M_dashboard->userData($user);
	// 		$this->load->view("template", $data);
	// 	}
  // }

	public function index(){
    if($this->session->userdata('isLogin') == FALSE){
      redirect('login/login_form');
    }else{
			// $this->load->model('M_dashboard');
			$data['content'] = 'Dashboard';
			$user = $this->session->userdata('username');
			$data['level'] = $this->session->userdata('level');
			$data['user'] = $this->M_dashboard->userData($user);
			$this->load->view("template", $data);
    }
  }

	// public function login(){
  //   $session = $this->session->userdata('isLogin');
  //   if($session == FALSE){
  //     redirect('dashboard/login_form');
  //   }else{
  //     redirect('dashboard');
  //   }
  // }
	//
  // public function login_form(){
  //   $this->form_validation->set_rules('username', 'Username', 'required');
  //   $this->form_validation->set_rules('password', 'Password', 'required');
  //   $this->form_validation->set_error_delimiters('<span class="error">', '</span>');
  //   if($this->form_validation->run()==FALSE){
  //     $this->load->view('form_login');
  //   }else{
  //     $username = $this->input->post('username');
  //     $password = $this->input->post('password');
  //     // $level    = $this->input->post('level');
	// 		// $cek = $this->M_dashboard->takeUser($username, $password, 1, $level);
  //     $cek = $this->M_dashboard->takeUser($username, $password, 1);
	// 		// if($cek = true){
  //     if($cek <> 0){
  //       $this->session->set_userdata('isLogin', TRUE);
  //       $this->session->set_userdata('username',$username);
  //       // $this->session->set_userdata('level',$level);
  //       redirect('dashboard');
  //     }else{
  //       echo
	// 			"s<script>
  //       alert('Failed Login: Check your username and password!');
  //         history.go(-1);
  //       </script>";
  //     }
  //   }
  // }
	//
  // public function logout(){
  //   $this->session->sess_destroy();
  //   redirect('dashboard/login_form');
  // }

}
