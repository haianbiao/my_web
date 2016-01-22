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
                      return $query->result_array();
              }

              return array();
    }

    function get_latest_comments()
    {
              $sql = "SELECT  title, user_name, comment.content as comment_content
                       FROM comment
                       INNER  JOIN article
                       ON article.id = comment.article_id
                       ORDER BY comment.add_time DESC
                       LIMIT 5";
              $query = $this->db->query($sql);
              if($query->num_rows() > 0)
              {
                      return $query->result_array();
              }

              return array();
    }


}