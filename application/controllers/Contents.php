<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contents extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
   public function index()
 	{
    //echo $path;
 		$this->load->view('welcome_message');
 	}

  public function latest_news(){
    $keyword = $this->input->post("keyword","");
    $page = $this->input->post("page","");

    $this->load->model('post_model');
    $data = $this->post_model->get_posts();

    echo "<pre>";
    print_r($data);
    echo "</pre>";
  }
}
