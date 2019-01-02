<?php if (!defined('BASEPATH')) exit('Tidak ada akses langsung yang diizinkan');

    class M_Article extends CI_Model {

        var $table = 'articles';
        var $table_cat = 'categories';
        var $table_ad = 'admins';
        var $column_order = array('post_title','post_slug','created_at',null); //set column field database for datatable orderable
        var $column_search = array('post_title','post_slug'); //set column field database for datatable searchable just post_title , post_slug , status are searchable
        var $order = array('id' => 'desc'); // default order

        public function __construct()
        {
            parent::__construct();
            $this->load->database();
            $this->load->library('session');
        }

        function getCat(){
          $this->db->from($this->table_cat);
          $this->db->order_by('category_name', 'asc');
          $catnow = $this->db->get();
          return $catnow->result();
        }

        function getJoinAll(){
          $this->db->select("*");
          $this->db->from($this->table_cat);
          $this->db->join($this->table, "category_ID = categories.id");
          $this->db->join($this->table_ad, "author_ID = admins.id");
          $tb_join = $this->db->get();

          return $tb_join->row();
        }

        function getArt(){
          return $this->db->get($this->table)->result();
        }

        private function _get_datatables_query()
        {

            $this->db->from($this->table);

            $i = 0;

            foreach ($this->column_search as $item) // loop column
            {
                if($_POST['search']['value']) // if datatable send POST for search
                {

                    if($i===0) // first loop
                    {
                        $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                        $this->db->like($item, $_POST['search']['value']);
                    }
                    else
                    {
                        $this->db->or_like($item, $_POST['search']['value']);
                    }

                    if(count($this->column_search) - 1 == $i) //last loop
                        $this->db->group_end(); //close bracket
                }
                $i++;
            }

            if(isset($_POST['order'])) // here order processing
            {
                $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
            }
            else if(isset($this->order))
            {
                $order = $this->order;
                $this->db->order_by(key($order), $order[key($order)]);
            }
        }

        function get_datatables()
        {
            $this->_get_datatables_query();
            if($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
            $query = $this->db->get();
            return $query->result();
        }

        function count_filtered()
        {
            $this->_get_datatables_query();
            $query = $this->db->get();
            return $query->num_rows();
        }

        public function count_all()
        {
            $this->db->from($this->table);
            return $this->db->count_all_results();
        }

        public function get_by_id($id)
        {
            $this->db->from($this->table);
            $this->db->where('id',$id);
            $query = $this->db->get();

            return $query->row();
        }

        public function save($data)
        {
            $this->db->insert($this->table, $data);
            return $this->db->insert_id();
        }

        public function update($where, $data)
        {
            $this->db->update($this->table, $data, $where);
            return $this->db->affected_rows();
        }

        public function delete_by_id($id)
        {
            $this->db->where('id', $id);
            $this->db->delete($this->table);
        }

        function upload_image($fieldname, $path)
        {
            $config['upload_path'] = $path;
            if (!is_dir($config['upload_path']))
            {
              mkdir($config['upload_path'], 0777,TRUE);
            }

            $config['allowed_types'] = 'jpg|png|jpeg|gif';
            $config['max_size'] = '2000';
            $config['remove_spaces'] = true;
            $config['overwrite'] = false;
            $config['encrypt_name'] = true;
            $config['max_width']  = '';
            $config['max_height']  = '';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload($fieldname)){
            $error = array('error' => $this->upload->display_errors());
          }else{
            $upload_data = $this->upload->data();
            return $upload_data['file_name'];
          }
        }

    }
