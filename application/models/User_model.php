<?php
class User_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function   register($user_name, $user_passwd)
    {
             $sql = "INSERT INTO friends(name, password) VALUES(?, ?)";
             $query = $this->db->query($sql, array($user_name, $user_passwd));
             if($query)
             {
                    return TRUE;
             }
             else
             {
                   return FALSE;
             }
    }

    function login($user_name, $user_passwd)
    {
              $sql = "SELECT *
                        FROM friends 
                        WHERE name = ?
                        AND password = ?";
              $query = $this->db->query($sql, array($user_name, $user_passwd));
              if($query->num_rows() > 0)
              {
                    return  $query->row()->id;
              }
              else
              {
                    return FALSE;
              }
    }


}