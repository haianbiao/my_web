<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

              function __construct()
              {
              	parent::__construct();
              }

	public function user_login()
	{
                         $data = array();
                         $name    = $this->input->post('name');
	                  $passwd = $this->input->post('passwd');
	                  $this->load->model('user_model');
	                  if($name &&  $passwd)
                          {
                        	     $user_arr = $this->user_model->login($name, $passwd);  
                        	     if($user_arr)
                        	     {
                            	     	$this->session->set_userdata('user_id', $user_arr['id']);
                                         $this->session->set_userdata('user_name', $user_arr['name']);
                            	     	redirect("home");
                        	     }
                        	     else
                        	     {
                        	     	     echo "user not exist";
                        	     }
                         }
                         else
                         {
                        	    $data =  array('type'  => 'login');
                        	    $data['header']  = $this->load->view('header_page', NULL, TRUE);
                        	    $this->load->view('user_page' , $data);
                         }
	}

	public function user_register()
	{
	             $name    = $this->input->post('name');
	             $passwd = $this->input->post('passwd');
                        $this->load->model('user_model');

                        if($name &&  $passwd)
                        {
                                  if(mb_strlen($name) < 6)
                                  {
                                        exit('用户名不能少于六个字符');
                                  }
                        	     $result  = $this->user_model->register($name, $passwd);  
                        	     if($result)
                        	     {
                        	     	redirect("login");
                        	     }
                        }
                        else
                        {
                        	    $data =  array('type'  => 'register');
                        	     $data['header']  = $this->load->view('header_page', NULL, TRUE);
                        	    $this->load->view('user_page' , $data);
                        }
                
	}

	function login_out()
	{
	       $this->session->sess_destroy(); 
              redirect('home');
	}
}