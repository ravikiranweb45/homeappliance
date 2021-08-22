<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$this->data['sub_page'] = 'about';
        $this->data['main_menu'] = 'about';
        $this->data['title'] = 'About Us';
        $this->load->view('layout', $this->data);
	}

}

/* End of file About.php */
/* Location: ./application/controllers/About.php */