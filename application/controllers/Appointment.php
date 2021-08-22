<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Appointment extends CI_Controller {

	public function index()
	{
		$this->data['sub_page'] = 'contact';
        $this->data['main_menu'] = 'contact';
        $this->data['title'] = 'Conatct Us';
        $this->load->view('layout', $this->data);		
	}

}

/* End of file Appointment.php */
/* Location: ./application/controllers/Appointment.php */