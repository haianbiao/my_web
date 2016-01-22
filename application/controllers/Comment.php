<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comment extends CI_Controller {

        function __construct()
        {
        	parent::__construct();
              $this->load->model('comment_model');
        }

	public function  store_comment()
	{
               $field_arr  = array();
               $field_arr['user_name']    = $this->input->post('user_name');
               $field_arr['user_email']    = $this->input->post('user_email');
               $field_arr['web_site']        = $this->input->post('web_site');
               $field_arr['content']          = $this->input->post('comment');
               $email = filter_var($field_arr['user_email'], FILTER_VALIDATE_EMAIL);
               if(!$email)
               {
                      exit('邮箱不合法');
               }
               if(empty($field_arr['content']))
               {
                      exit('评论内容不能为空');
               }
               $field_arr['article_id'] = $this->input->post('article_id');
               $field_arr['add_time'] = time();
             
               $return = $this->comment_model->store_comment($field_arr);
               if($return)
               {
                      redirect('article/show_article/'.$field_arr['article_id']);
               }

	}

       public function  get_latest_comments()
       {
                 $latest_comments = $this->comment_model->get_latest_comments();
       }


}