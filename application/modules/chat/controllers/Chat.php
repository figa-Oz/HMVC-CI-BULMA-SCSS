<?php defined('BASEPATH') OR exit('Tidak ada akses langsung yang diizinkan');

class Chat extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index(){
		redirect('http://kln.zoossoft.net/lr/chatpre.aspx?id=kln19529695&amp;lng=en', 'refresh');
	}
}
