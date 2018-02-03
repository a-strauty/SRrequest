<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sr extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('sr_model');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['names'] = $this->sr_model->get_names();
		$data['days'] = $this->sr_model->get_days();
		$data['title'] = 'Sales Routing';

		$this->load->view('templates/header', $data);
		$this->load->view('lookup/index', $data);
		$this->load->view('templates/footer');
	}

	public function results()
	{
		$data['sr_select'] = $this->input->get('sr_select');
		$data['dayradio'] = $this->input->get('dayradio');
		$data['accounts'] = $this->sr_model->get_accounts($data['sr_select'], $data['dayradio']);
		$data['names'] = $this->sr_model->get_names();
		$data['days'] = $this->sr_model->get_days();

		$data['title'] = 'Sales Routing';

		$this->load->view('templates/header', $data);
		$this->load->view('lookup/results', $data);
		$this->load->view('templates/footer');
	}

	public function request()
	{
		$data['day'] = $this->input->post('og_day');
		$data['req_change'] = $this->input->post('req_change');
		$data['req_sr'] = $this->input->post('req_sr');
		$data['accounts'] = $this->sr_model->get_request($data['day'], $data['req_change']);
		$data['names'] = $this->sr_model->get_names();
		$data['days'] = $this->sr_model->get_days();

		$data['title'] = 'Sales Routing';

		$this->load->view('templates/header', $data);
		$this->load->view('lookup/request', $data);
		$this->load->view('templates/footer');
	}

	public function submit()
	{
		$data['req'] = $this->input->post('req[]');
		$data['submit'] = $this->sr_model->set_request($data['req']);

		$data['title'] = 'Sales Routing';

		$this->load->view('templates/header', $data);
		$this->load->view('lookup/submit', $data);
		$this->load->view('templates/footer');
	}
}
