<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comment extends CI_Controller {

        function __construct()
        {
        	parent::__construct();
        }

	public function  store_comment()
	{
               $field_arr  = array();
               $field_arr['user_id']    = $this->session->userdata('user_id');
               $field_arr['content']    = $this->input->post('comment');
               $field_arr['article_id'] = $this->input->post('article_id');
               $field_arr['add_time'] = time();
               $this->load->model('comment_model');
               $return = $this->comment_model->store_comment($field_arr);
               if($return)
               {
                      redirect('article/show_article/'.$field_arr['article_id']);
               }

	}


}