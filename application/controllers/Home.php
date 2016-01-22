<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

              function __construct()
              {
                      parent::__construct();
              }


	public function index()
	{
		$this->load->model('home_model');
                            $this->load->model('tag_model');
                            $this->load->model('comment_model');
                            $offset = $this->uri->segment('3') - 0;
                            $limit  = 5;
                            $data['my_article']    = $this->home_model->do_read($offset, $limit);
                            $right_con['tags']       = $this->tag_model->get_tag_names();
                            //page
                            $this->load->helper('pagination');
                            $base_url                    =  site_url('home/index');
                            $total_nums                = $this->home_model->get_total_nums();
                            $data['page_nav']      = show_pagination($base_url, $total_nums,  $limit);
                            $right_con['my_latest_article'] = $this->home_model->get_latest_article($limit);
                            $right_con['latest_comments'] = $this->comment_model->get_latest_comments();
                            $data['right_content']       = $this->load->view('right_content_page',  $right_con, TRUE);
                            $data['header']  = $this->load->view('header_page', NULL, TRUE);
		$this->load->view('home_page', $data);
	}
}