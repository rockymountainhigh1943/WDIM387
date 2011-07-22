<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax extends CI_Controller {

	public function date()
	{
		/*
		$data['title'] = '- AJAX Date';
		$data['heading'] = 'AJAX Date';
		
		$this->load->view('header', $data);
		$this->load->view('ajax_date', $data);
		$this->load->view('footer');
		*/
		$date = date('F d, Y, g:i:s a');
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($date));
	}
	
	public function time()
	{
		/*
		$data['title'] = '- AJAX Time';
		$data['heading'] = 'AJAX Time';
		
		$this->load->view('header', $data);
		$this->load->view('ajax_time', $data);
		$this->load->view('footer');
		*/
		$time = date('U');
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($time));
	}
	
	public function output()
	{
		$data['title'] = '- AJAX Output';
		$data['heading'] = 'AJAX Output';
		
		$this->load->view('header', $data);
		$this->load->view('ajax_output', $data);
		$this->load->view('footer');
	}

}