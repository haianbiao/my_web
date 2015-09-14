<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Tag extends CI_Controller {

        function __construct()
        {
                parent::__construct();
        }


	public function  get_article_by_tag_id($tag_id)
	{
              $this->load->model('home_model');
              $this->load->model('tag_model');
              $data['tags_article']            = $this->tag_model->get_article_by_tag_id($tag_id);
              $right_con['tags']            = $this->tag_model->get_tag_names();
              $limit  = 5;
              $right_con['my_latest_article'] = $this->home_model->get_latest_article($limit);
              $data['right_content']       = $this->load->view('right_content_page',  $right_con, TRUE);
              $data['header']  = $this->load->view('header_page', NULL, TRUE);
		$this->load->view('tag_page', $data);
	}
}