<?php if (!defined('BASEPATH')) exit('Tidak ada akses langsung yang diizinkan');

  class M_disease extends CI_Model {

    // var $table = 'articles';
    // var $table_cat = 'categories';
    // var $table_ad = 'admins';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function listArticle($slug = NULL){
      $this->db->select("*");
      $this->db->from('categories');
      $this->db->join('articles', "category_ID = categories.id");
      $this->db->where('category_slug',$slug);
      $this->db->order_by('post_slug','asc');
      $tb_join = $this->db->get();

      if($tb_join->num_rows()>0){
          return $tb_join;
      }else {
        return false;
      }
    }

    public function singleArticle($slug, $slugpost){
      $this->db->select("*");
      $this->db->from('categories');
      $this->db->join('articles', "category_ID = categories.id");
      $this->db->where('category_slug',$slug);
      $this->db->where('post_slug',$slugpost);
      $tb_join = $this->db->get();

      if($tb_join->num_rows()>0){
          return $tb_join;
      }else {
        return false;
      }
    }

    public function listArticle2($slug, $slugpost){
      $this->db->select("*");
      $this->db->from('categories');
      $this->db->join('articles', "category_ID = categories.id");
      $this->db->where('category_slug',$slug);
      $this->db->where('post_slug !=',$slugpost);
      $this->db->order_by('post_slug','asc');
      $tb_join = $this->db->get();

      return $tb_join;
    }
  }
