<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Review extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('review_model');
		$this->load->helper('url');
	}

	public function review()
	{
		$data['names'] = $this->review_model->get_names();

		$data['title'] = 'Request Review';

		$this->load->view('templates/header', $data);
		$this->load->view('review/review', $data);
		$this->load->view('templates/footer');
	}

	public function review_results()
	{
		$data['sr_select'] = $this->input->get('sr_select');
		$data['accounts'] = $this->review_model->get_createdrequests($data['sr_select']);
		$data['names'] = $this->review_model->get_names();

		$data['title'] = 'Request Review';

		$this->load->view('templates/header', $data);
		$this->load->view('review/review_results', $data);
		$this->load->view('templates/footer');
	}

}
