<?php
class Right_content extends CI_Controller{
           function __construct()
           {
           	     parent::__construct();
           }

           function get_right_content()
           {
   	      $this->load->model('home_model');
                    $this->load->model('tag_model');
   	      $data['tags']            = $this->tag_model->get_tag_names();
                    $limit  = 5;
                    $data['my_latest_article'] = $this->home_model->get_latest_article($limit);
                    return  $this->load->view('right_content', $data, TRUE);
           }
}