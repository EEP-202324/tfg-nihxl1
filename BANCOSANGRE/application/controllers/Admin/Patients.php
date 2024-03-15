<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Patients extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function index()
	{
		$this->load->view('STYLES/header');
        $this->load->view('Admin/SidebarAdmin');
		$this->load->view('Admin/Body/Patients');
        $this->load->view('Admin/FooterAdmin');
	}  

    function addPatient(){
        $this->load->view('STYLES/header');;
        $this->load->view('Admin/SidebarAdmin');
		$this->load->view('Admin/Body/AddPatient');
        $this->load->view('Admin/FooterAdmin');
    }
}
?>
