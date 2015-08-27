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

                            $data['my_article'] = $this->home_model->do_read();
                            $limit  = 5;
                            $data['my_latest_article'] = $this->home_model->get_latest_article($limit);
                            $data['header']  = $this->load->view('header_page', NULL, TRUE);
		$this->load->view('home_page', $data);
	}
}