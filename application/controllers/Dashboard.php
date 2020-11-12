<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller 
{
    public function __construct()
	{
		parent::__construct();
        $this->load->model('Dashboard_Model');
        $this->load->model('Info_Loker_Model');
	}

    public function index()
    {
        $data['judul'] = 'Dashboard';
        $data['total_lamaran'] = $this->Dashboard_Model->total();
        $data['total_info_loker'] = $this->Info_Loker_Model->total();
        $this->load->view('layouts/header-1', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('dashboard', $data);
        $this->load->view('layouts/footer');
    }
}
