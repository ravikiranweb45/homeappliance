<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
        $this->data['sub_page'] = 'index';
        $this->data['main_menu'] = 'home';
        $this->data['title'] = 'Home';
        $this->load->view('layout', $this->data);
	}

    public function about()
    {
        $this->data['sub_page'] = 'about';
        $this->data['main_menu'] = 'about';
        $this->data['title'] = 'About Us';
        $this->load->view('layout', $this->data);
    }

    public function services()
    {
        $this->data['sub_page'] = 'services';
        $this->data['main_menu'] = 'services';
        $this->data['title'] = 'Services';
        $this->load->view('layout', $this->data);
    }

    public function contact()
    {
        $this->data['sub_page'] = 'contact';
        $this->data['main_menu'] = 'contact';
        $this->data['title'] = 'Conatct Us';
        $this->load->view('layout', $this->data);
    }
}
