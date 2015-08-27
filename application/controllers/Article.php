<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

              function __construct()
              {
              	parent::__construct();
              }


	public function show_article($id)
	{
		$this->load->model('article_model');
		$this->load->model('home_model');
                            $data['full_article'] = $this->article_model->show_article($id);
                            $limit  = 5;
                            $data['my_latest_article'] = $this->home_model->get_latest_article($limit);
                            $data['header']  = $this->load->view('header_page', NULL, TRUE);
		$this->load->view('article_page', $data);
	}
}