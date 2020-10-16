<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		$this->load->model('Mahasiswa_model');
	}

	public function index()
	{
		$x['mahasiswa'] = $this->Mahasiswa_model->get_data();
		$this->template->load('layouts/template', 'content/dashboard', $x);
	}
}
