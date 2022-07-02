<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Oversea_jobs extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('menu_model');
		$this->load->model('oversea_jobs_model');
		$this->load->model('activities_model');
	}

	public function index($id)
	{
		$data['country_lists'] = $this->menu_model->get_country();
		$data['oversea_jobs'] = $this->oversea_jobs_model->get_oversea_jobs($id);

		$data['activities'] = $this->activities_model->getAll();
		$this->load->view('oversea_jobs/index', $data);
	}

	public function category($id)
	{
		$data['country_lists'] = $this->menu_model->get_country();
		$data['oversea_jobs'] = $this->oversea_jobs_model->get_oversea_jobs($id);
		$data['country_title'] = $this->oversea_jobs_model->get_country_title($id);
		$data['activities'] = $this->activities_model->getAll();
		$this->load->view('oversea_jobs/index', $data);
	}


	public function search()
	{
		$id = $this->input->get('country_id');
		$data['country_lists'] = $this->menu_model->get_country();
		$data['country_title'] = $this->oversea_jobs_model->get_country_title($id);
		$data['oversea_jobs'] = $this->oversea_jobs_model->search_oversea_jobs($id);
		$data['activities'] = $this->activities_model->getAll();
		$this->load->view('oversea_jobs/index', $data);
	}
}
