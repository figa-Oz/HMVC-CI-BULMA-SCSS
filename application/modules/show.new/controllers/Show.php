<?php defined('BASEPATH') OR exit('Tidak ada akses langsung yang diizinkan');

class Show extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('session', 'form_validation', 'email'));
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('M_show','modelThis');
	}

	public function index(){
		$data['title'] = 'Home';
		$data['descript'] = "Klinik Utama Garacia";
    $data['content'] = 'homePage';

    $data['andrologi'] = $this->modelThis->andrologi();
    $data['ginekologi'] = $this->modelThis->ginekologi();
		$data['pms'] = $this->modelThis->pms();
		$this->load->view('layout',$data);
	}

	public function email(){
		//get the form data
		$name = $this->input->post('name');
		$call = $this->input->post('call');
		$from_email = $this->input->post('email');
		$subject = $this->input->post('subject');
		$message = $this->input->post('message');
		$to_email = 'ccjincao@gmail.com, alpenizme@gmail.com';
		// $to_email = 'alpenizme@gmail.com';

		$this->email->from($from_email, $name);
		$this->email->to($to_email);
		$this->email->subject($subject);
		$this->email->message("Nama : $name\nNo. Telp : $call\nSubyek : $subject\nKeluhan : $message");

 		if($this->email->send()){
			$this->session->set_flashdata("success","Berhasil mengirim email.");
			redirect('show');
		}else {
			$this->session->set_flashdata("warning","Gagal mengirim pesan.");
			redirect('show');
			// redirect(current_url());
		}
	}


		public function doemail(){
			$data['title'] = 'Home';
			$data['descript'] = "Klinik Utama Garacia";
	    $data['content'] = 'homePage';

	    $data['andrologi'] = $this->modelThis->andrologi();
	    $data['ginekologi'] = $this->modelThis->ginekologi();
			$data['pms'] = $this->modelThis->pms();
			//set validation rules
			$this->form_validation->set_rules('name', 'Nama', 'trim|required');
			$this->form_validation->set_rules('call', 'No. Telepon', 'trim|required|numeric');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			$this->form_validation->set_rules('subject', 'Subyek', 'trim|required');
			$this->form_validation->set_rules('message', 'Keluhan', 'trim|required');


			// run validation on form input
			if ($this->form_validation->run() == FALSE)
			{
				$this->session->set_flashdata("warning","anda tidak menginput dengan benar.");
				$this->load->view('layout',$data);
			}
			else
			{
					//get the form data
					$name = $this->input->post('name');
					$call = $this->input->post('call');
					$from_email = $this->input->post('email');
					$subject = $this->input->post('subject');
					$message = $this->input->post('message');
					$to_email = 'ccjincao@gmail.com, alpenizme@gmail.com';

					// use double quotes
					// $this->load->library('email', $config);
					// $this->email->initialize($config);
					//send mail
					$this->email->from($from_email, $name);
					$this->email->to($to_email);
					$this->email->subject($subject);
					$this->email->message("Nama : $name\nNo. Telp : $call\nSubyek : $subject\nKeluhan : $message");

	     		if($this->email->send())
	     		 $this->session->set_flashdata("success","Berhasil mengirim email.");
	     		else
	     		 $this->session->set_flashdata("warning","Gagal mengirim pesan.");
	     		 // $this->load->view('email_form');
	     		 redirect('show');
				}
		}
}
