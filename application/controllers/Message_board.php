<?php  defined('BASEPATH') OR exit('No direct script access allowed');

class Message_board extends CI_Controller
{
	function __construct()
	{
                       parent::__construct();
                       $this->load->model('message_board_model');
	}

	function  save_message()
	{
                       $name    = $this->input->post('name');
                       $message =  $this->input->post('message');
                       if(empty($name) || empty($message))
                       {
                       	     redirect('message_board/get_message');
                       }
                       $return    = $this->message_board_model->save_message($name, $message);
                       if($return)
                       {
                       	    redirect('message_board/get_message');
                       }
	}

	function  get_message()
	{
                      $data['message'] = $this->message_board_model->get_message();
                      $data['header']  = $this->load->view('header_page', NULL, TRUE);
                      $this->load->view('message_board_page', $data);
	}
}