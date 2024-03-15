<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Donors extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
    }

    function hola(){
        echo base_url();
    }

    public function index()
	{
		$this->load->view('STYLES/header');
        $this->load->view('Admin/SidebarAdmin');
		$this->load->view('Admin/Body/Donors');
        $this->load->view('Admin/FooterAdmin');
	}  

    function addDonor(){
        $this->load->view('STYLES/header');;
        $this->load->view('Admin/SidebarAdmin');
		$this->load->view('Admin/Body/AddDonor');
        $this->load->view('Admin/FooterAdmin');
    }
}
?>
