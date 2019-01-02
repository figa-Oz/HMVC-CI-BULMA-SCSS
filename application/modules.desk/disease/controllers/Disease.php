<?php defined('BASEPATH') OR exit('Tidak ada akses langsung yang diizinkan');

class Disease extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library(array('form_validation','session'));
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('M_disease','modelThis');
		$this->load->model('show/M_show','modelSecond');
	}

	// public function index(){
	// 	$data['title'] = 'Artikel';
	// 	$data['content'] = 'List';
  //   $data['andrologi'] = $this->modelThis->andrologi();
	// 	$data['ginekologi'] = $this->modelThis->ginekologi();
	// 	$data['pms'] = $this->modelThis->pms();
	// 	$this->load->view('show/layout', $data);
  // }

	public function catlist($slug){
		$data['andrologi'] = $this->modelSecond->andrologi();
		$data['ginekologi'] = $this->modelSecond->ginekologi();
		$data['pms'] = $this->modelSecond->pms();
		$detail = $this->modelThis->listArticle($slug);

		if ($detail == true) {
			$data['title'] = ucwords($detail->row()->category_name);
			$data['descript'] = "Lis (artikel/penyakit) ".$detail->row()->category_name;
			$data['detail'] = $detail;
			$data['content'] = 'List';
		}else {
			$data['title'] = "Artikel kosong";
			$data['descript'] = "Artikel pada ketegori ini masih kosong";
	    $data['content'] = '404-article';
		}

		$this->load->view('show/layout',$data);
	}

	public function article($slugart){
		$single = $this->modelThis->singleArticle($slugart);

		$data['title'] = ucwords($single->row()->post_title);
		// $row[] = html_entity_decode(substr($list->post_content,0,700));
		// $data['descript'] = strip_tags(substr($single->row()->post_content,392,800));
		$text = $single->row()->post_content;
		$data['descript'] = strip_tags(mb_substr($text,0,860));

		// $data['descript'] = "Ini adalah meta Description";
		$data['detail'] = $single;
		$data['content'] = 'single';
		$data['andrologi'] = $this->modelSecond->andrologi();
		$data['ginekologi'] = $this->modelSecond->ginekologi();
		$data['pms'] = $this->modelSecond->pms();
		$this->load->view('show/layout',$data);
	}

}
