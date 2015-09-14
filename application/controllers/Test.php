<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

              function __construct()
              {
                      parent::__construct();
              }


	public function index()
	{
              $data  = array();
              $data['header']  = $this->load->view('header_page', NULL, TRUE);
		$this->load->view('test_page', $data);
	}
}