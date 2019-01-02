<?php if (!defined('BASEPATH')) exit('Tidak ada akses langsung yang diizinkan');

  class M_show extends CI_Model {

    var $table = 'articles';
    var $table_cat = 'categories';
    // var $table_ad = 'admins';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('session');
    }

    function andrologi(){
      $this->db->from($this->table_cat);
      $this->db->where('category_type','andrologi');
      $this->db->or_where('category_type','andrologi,ginekologi');
      $this->db->or_where('category_type','andrologi,pms');
      $this->db->or_where('category_type','andrologi,ginekologi,pms');
      $this->db->order_by('category_name','asc');
      $come = $this->db->get();
      return $come->result();
    }

    function ginekologi(){
      $this->db->from($this->table_cat);
      $this->db->where('category_type','ginekologi');
      $this->db->or_where('category_type','andrologi,ginekologi');
      $this->db->or_where('category_type','ginekologi,pms');
      $this->db->or_where('category_type','andrologi,ginekologi,pms');
      $this->db->order_by('category_name','asc');
      $come = $this->db->get();
      return $come->result();
    }

    function pms(){
      $this->db->from($this->table_cat);
      $this->db->where('category_type','pms');
      $this->db->or_where('category_type','andrologi,pms');
      $this->db->or_where('category_type','ginekologi,pms');
      $this->db->or_where('category_type','andrologi,ginekologi,pms');
      $this->db->order_by('category_name','asc');
      $come = $this->db->get();
      return $come->result();
    }

    function getJoinAll(){
      $this->db->select("*");
      $this->db->from($this->table_cat);
      $this->db->join($this->table, "category_ID = categories.id");
      $tb_join = $this->db->get();

      return $tb_join->result();
    }

    function random_word() {
      $this->db->select('articles.id,categories.id,category_name, category_slug, post_title, post_slug');
      $this->db->from($this->table_cat);
      $this->db->join($this->table, "category_ID = categories.id");
      $this->db->limit(18);
      $this->db->order_by('post_title', 'RANDOM');
      $random = $this->db->get();
      // $randoms = $random->row();
      // $new_array = explode(" ", $random->post_title);

      // return url_title(random_element($new_array), '');

      return $random;
    }

  }
