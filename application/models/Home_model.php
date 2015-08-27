<?php
class Home_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function do_read()
    {
    	$sql = "SELECT  * 
    	             FROM article
                           ORDER BY add_time DESC";
    	 $query = $this->db->query($sql);

    	 if($query->num_rows() > 0)
    	 {
    	          return $query->result_array();
    	 }

    	 return array();
    }

    function get_total_nums()
    {
              $sql = "SELECT  * 
                          FROM article";
              $query = $this->db->query($sql);

              return $query->num_rows();

    }

    function get_latest_article($limit)
    {
              $sql = "SELECT  id, title
                          FROM article
                          ORDER BY  add_time DESC
                           LIMIT  ?";
             $query = $this->db->query($sql, array($limit));

             if($query->num_rows() > 0)
             {
                      return $query->result_array();
             }

             return array();
    }


}