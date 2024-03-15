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
    }


    
    public function index()
	{
		$this->load->view('STYLES/header');
        //$this->load->view('Admin/NavBar');
        $this->load->view('Admin/SidebarAdmin');
		$this->load->view('Admin/Body/BloodManagement');
        $this->load->view('Admin/FooterAdmin');
	}

    public function Donations()
	{
		$this->load->view('STYLES/header');
        //$this->load->view('Admin/NavBar');
        $this->load->view('Admin/SidebarAdmin');
		$this->load->view('Admin/Body/Donations');
        $this->load->view('Admin/FooterAdmin');
	}

    public function Transfusions()
	{
		$this->load->view('STYLES/header');
        //$this->load->view('Admin/NavBar');
        $this->load->view('Admin/SidebarAdmin');
		$this->load->view('Admin/Body/Transfusions');
        $this->load->view('Admin/FooterAdmin');
	}

    
}
?>
