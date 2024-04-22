<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BloodManagement extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');

        if(!$this->session->userdata('user'))
        {
            redirect(base_url());
        }

        $this->load->model('Admin/BloodManagementModel');
    }

    public function index()
	{
		$data['pouches_data'] = $this->BloodManagementModel->get_pouches_data();
		$this->load->view('STYLES/header');
        //$this->load->view('Admin/NavBar');
        $this->load->view('Admin/SidebarAdmin');
		$this->load->view('Admin/Body/BloodManagement', $data); 
        $this->load->view('Admin/FooterAdmin');
	}
}
?>

