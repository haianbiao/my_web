<?php
class Message_board_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function save_message($name, $message)
	{
                       $sql      = "INSERT INTO message_board(name, content) VALUES (?, ?)";
                       $result = $this->db->query($sql, array($name, $message));
                        if($result)
                        {
                        	    return TRUE;
                        }

                        return FALSE;
	}

	function get_message()
	{
                       $sql       = "SELECT *
                                          FROM message_board";
                        $query = $this->db->query($sql);

                        return $query->result_array();
	}
}