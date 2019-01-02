<?php
defined('BASEPATH') OR exit('Tidak ada akses langsung yang diizinkan');

class Page extends CI_Controller {

    public function __construct()
    {
				parent::__construct();
        $this->load->library(array('form_validation','session','upload'));
    		$this->load->database();
    		$this->load->helper('url');
        $this->load->model('login/M_login');
        $this->load->model('dashboard/M_dashboard');
        $this->load->model('M_Page','modelThis');
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
				$data['title'] = 'Data Halaman';
	      $data['content'] = 'V_Page';
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
            $row[] = $list->title;
            // $row[] = $list->slug;
						// $row[] = html_entity_decode(substr($list->content,0,1600));
            $row[] = $list->statuses;
            $row[] = $list->created_at;

            //add html for action
            $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_data('."'".$list->id."'".')"><i class="glyphicon glyphicon-pencil"></i></a>
                  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_data('."'".$list->id."'".')"><i class="glyphicon glyphicon-trash"></i></a>';

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

    public function ajax_edit($id)
    {
        $data = $this->modelThis->get_by_id($id);
        $data->created_at = ($data->created_at == '0000-00-00') ? '' : $data->created_at; // if 0000-00-00 set tu empty for datepicker compatibility
        echo json_encode($data);
    }

    public function ajax_add()
    {
        $this->_validate();
        $data = array(
                'title' => $this->input->post('title'),
                'slug' => url_title($this->input->post('title'), '-', TRUE),
                'content' => $this->input->post(htmlspecialchars('content')),
                'statuses' => $this->input->post('statuses'),
                'created_at' => $this->input->post('created_at'),
            );
        $insert = $this->modelThis->save($data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_update()
    {
        // $this->_validate();
        $data = array(
                'title' => $this->input->post('title'),
                'slug' => url_title($this->input->post('title'), '-', TRUE),
                'content' => $this->input->post(htmlspecialchars('content')),
                'statuses' => $this->input->post('statuses'),
                'created_at' => $this->input->post('created_at'),
            );
        $this->modelThis->update(array('id' => $this->input->post('id')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_delete($id)
    {
        $this->modelThis->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }


    private function _validate()
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;

        $title = $this->input->post('title');
        $this->db->from('pages');
        $this->db->where('title', $title);
        $query = $this->db->get();

        if ($query->num_rows() > 0 ) {
          $data['inputerror'][] = 'title';
          $data['error_string'][] = 'Nama halaman sudah ada, silahkan ganti dengan yang lain';
          $data['status'] = FALSE;
        }

        if($this->input->post('title') == '')
        {
            $data['inputerror'][] = 'title';
            $data['error_string'][] = 'Judul Halaman harap diisi';
            $data['status'] = FALSE;
        }

        // if($this->input->post('slug') == '')
        // {
        //     $data['inputerror'][] = 'slug';
        //     $data['error_string'][] = 'Link Halaman harap diisi';
        //     $data['status'] = FALSE;
        // }

				// if($this->input->post('content') == '')
        // {
        //     $data['inputerror'][] = 'content';
        //     $data['error_string'][] = 'Kontent harap diisi';
        //     $data['status'] = FALSE;
        // }

        if($this->input->post('statuses') == '')
        {
            $data['inputerror'][] = 'statuses';
            $data['error_string'][] = 'Status harap diisi';
            $data['status'] = FALSE;
        }

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
