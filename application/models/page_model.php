<?php
class  Page_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function do_read()
    {
    	$sql = "SELECT  * 
    	              FROM article";
    	 $query = $this->db->query($sql);

    	 if($query->num_rows() > 0)
    	 {
    	          return $query->result_array();
    	 }

    	 return array();
    }

}