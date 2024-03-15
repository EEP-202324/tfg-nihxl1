<?php
defined('BASEPATH') or exit('No direct script access allowed');
class DashboardController extends CI_Controller
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
    }

    function hola(){
        echo base_url();
    }

    public function index()
	{
		$this->load->view('STYLES/header');
        //$this->load->view('Admin/NavBar');
        $this->load->view('Admin/SidebarAdmin');
		$this->load->view('Admin/Body/Dashboard');
        $this->load->view('Admin/FooterAdmin');
	}

    
}
?>
