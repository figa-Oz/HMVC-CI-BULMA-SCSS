<?php
defined('BASEPATH') OR exit('Tidak ada akses langsung yang diizinkan');

class Article extends CI_Controller {

    public function __construct()
    {
				parent::__construct();
        $this->load->library(array('form_validation','session','upload'));
    		$this->load->database();
    		$this->load->helper('url');
        $this->load->model('login/M_login');
        $this->load->model('dashboard/M_dashboard');
        $this->load->model('M_Article','modelThis');
    }

    public function index()
    {
        if($this->session->userdata('isLogin') == FALSE){
          redirect('login/login_form');
        }else{
          // $this->load->model('M_dashboard');
          $user = $this->session->userdata('username');
          $data['level'] = $this->session->userdata('level');
          $data['user'] = $this->M_dashboard->userData($user);

  				$data['title'] = 'Data Artikel';
  	      $data['content'] = 'V_Article';
          $data['cat_list'] = $this->modelThis->getCat();
          $data['join_list'] = $this->modelThis->getJoinAll();
  	      $this->load->view('dashboard/template',$data);
        }
    }

    public function ajax_list()
    {
        $lists = $this->modelThis->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($lists as $list) {
            $no++;
            $row = array();
            $row[] = $list->author_ID;
            $row[] = $list->category_name;
            $row[] = $list->post_title;
            // $row[] = $list->post_slug;
	    // $row[] = html_entity_decode(substr($list->post_content,0,700));
            // $row[] = $list->post_thumbnail;
            $row[] = $list->created_at;

            //add html for action
            $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" post_title="Edit" onclick="edit_data('."'".$list->id."'".')"><i class="glyphicon glyphicon-pencil"></i></a>
                  <a class="btn btn-sm btn-danger" href="javascript:void(0)" post_title="Hapus" onclick="delete_data('."'".$list->id."'".')"><i class="glyphicon glyphicon-trash"></i></a>';

            $data[] = $row;
        }

        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->modelThis->count_all(),
                        "recordsFiltered" => $this->modelThis->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }

    public function ajax_add()
    {
        $this->_validate();
        $data = array(
                'author_ID' => $this->input->post('author_ID'),
                'category_ID' => $this->input->post('category_ID'),
                'post_title' => $this->input->post('post_title'),
                'post_slug' => url_title($this->input->post('post_title'), '-', TRUE),
                'post_content' => $this->input->post(htmlentities('post_content')),
                // 'post_thumbnail' => $this->input->post('post_thumbnail'),
                'created_at' => $this->input->post('created_at'),
            );
        $insert = $this->modelThis->save($data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_update()
    {
        $this->_validate();
        $data = array(
                'author_ID' => $this->input->post('author_ID'),
                'category_ID' => $this->input->post('category_ID'),
                'post_title' => $this->input->post('post_title'),
                'post_slug' => url_title($this->input->post('post_title'), '-', TRUE),
                'post_content' => $this->input->post('post_content'),
                // 'post_content' => htmlentities($this->input->post('post_content')),
                // 'post_thumbnail' => $this->input->post('post_thumbnail'),
                'created_at' => $this->input->post('created_at')
            );
        $this->modelThis->update(array('id' => $this->input->post('id')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_edit($id)
    {
        $data = $this->modelThis->get_by_id($id);
        $data->created_at = ($data->created_at == '0000-00-00') ? '' : $data->created_at; // if 0000-00-00 set tu empty for datepicker compatibility
        echo json_encode($data);
    }

    public function ajax_delete($id)
    {
        $this->modelThis->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }

    public function upload_editor_image()
    {
        $image_server_url =  "/vendors/uploads/";
        $funcNum = $_GET['CKEditorFuncNum'] ;

/*-------This is important to mention to identify the different dialog box in editor. If not mention it will throw error when any other dialog plugin (like youtube etc)  is used along with it----*/

        try {
            $image = $this->modelThis->upload_image('upload', "vendors/uploads/" );
            echo "<script 			type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($funcNum, '" . 	$image_server_url . $image . "', '');</script>";
        }
        catch (Exception $e) {
            echo "<script>window.parent.CKEDITOR.tools.callFunction($funcNum, '', ' ". $e->getMessage()." ');</script>";
        }
    }


    private function _validate()
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;

        if($this->input->post('category_ID') == '')
        {
            $data['inputerror'][] = 'category_ID';
            $data['error_string'][] = 'Kategori harap dipilih]';
            $data['status'] = FALSE;
        }

        if($this->input->post('post_title') == '')
        {
            $data['inputerror'][] = 'post_title';
            $data['error_string'][] = 'Judul Artikel harap diisi';
            $data['status'] = FALSE;
        }

        // if($this->input->post('post_slug') == '')
        // {
        //     $data['inputerror'][] = 'post_slug';
        //     $data['error_string'][] = 'Link 1 harap diisi';
        //     $data['status'] = FALSE;
        // }

				// if($this->input->post('post_content') == '')
        // {
        //     $data['inputerror'][] = 'post_content';
        //     $data['error_string'][] = 'Kontent harap diisi';
        //     $data['status'] = FALSE;
        // }

        // if($this->input->post('post_thumbnail') == '')
        // {
        //     $data['inputerror'][] = 'post_thumbnail';
        //     $data['error_string'][] = 'optional';
        //     $data['status'] = FALSE;
        // }

				if($this->input->post('created_at') == '')
        {
            $data['inputerror'][] = 'created_at';
            $data['error_string'][] = 'Tanggal harap diisi';
            $data['status'] = FALSE;
        }

        if($data['status'] === FALSE)
        {
            echo json_encode($data);
            exit();
        }
    }

}
