<?php
class Comment_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function  store_comment($field_arr  = array())
    {
              if(!empty($field_arr))
              {
                       return  $this->db->insert('comment', $field_arr);
              }
    }

    function get_comment_by_article_id($article_id)
    {
             $sql = "SELECT *
                         FROM comment
                         WHERE article_id  = ?";
              $query = $this->db->query($sql, array($article_id));
              if($query->num_rows() > 0)
              {
                    $data = $query->result_array();
                    return  $this->get_detail_comment($data);
              }

              return array();
    }

    function get_detail_comment($data)
    {
             $this->load->model('user_model');
             foreach($data as  $key => $row)
             {
                      $data[$key]['user_name'] = $this->user_model->get_user_name_by_id($row['user_id']);
             }

             return $data;
    }


}