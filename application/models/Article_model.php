<?php
class Article_model  extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function  show_article($id)
    {
    	$sql = "SELECT * 
    	              FROM article
                            WHERE  id = ? ";
    	 $query = $this->db->query($sql, array($id));

    	 if($query->num_rows() > 0)
    	 {
    	          return $query->row_array();
    	 }

    	 return array();
    }


}