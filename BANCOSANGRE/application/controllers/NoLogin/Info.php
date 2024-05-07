<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Info extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Admin/NewsModel');

    }

    public function WhyGiveBlood()
	{
		$this->load->view('STYLES/header');
        $this->load->view('NoLoginDonante/sidebarNoLogin');
        $this->load->view('NoLoginDonante/navbar2');
		$this->load->view('NoLoginDonante/Body/WhyGiveBlood'); 
	}  

    public function BloodTypes()
	{
		$this->load->view('STYLES/header');
        $this->load->view('NoLoginDonante/sidebarNoLogin');
        $this->load->view('NoLoginDonante/navbar2');
		$this->load->view('NoLoginDonante/Body/bloodtypes'); 
	} 

    public function BloodUsage()
	{
		$this->load->view('STYLES/header');
        $this->load->view('NoLoginDonante/sidebarNoLogin');
        $this->load->view('NoLoginDonante/navbar2');
		$this->load->view('NoLoginDonante/Body/blood_usage'); 
	} 

    public function BloodDonation()
	{
		$this->load->view('STYLES/header');
        $this->load->view('NoLoginDonante/sidebarNoLogin');
        $this->load->view('NoLoginDonante/navbar2');
		$this->load->view('NoLoginDonante/Body/blood_donor'); 
	} 

    public function HealthandElegibility()
	{
		$this->load->view('STYLES/header');
        $this->load->view('NoLoginDonante/sidebarNoLogin');
        $this->load->view('NoLoginDonante/navbar2');
		$this->load->view('NoLoginDonante/Body/health'); 
	}

    public function Considerations()
	{
		$this->load->view('STYLES/header');
        $this->load->view('NoLoginDonante/sidebarNoLogin');
        $this->load->view('NoLoginDonante/navbar2');
		$this->load->view('NoLoginDonante/Body/considerations'); 
	}

    public function News()
	{
        $data['news'] = $this->NewsModel->obtenerNoticias();

		$this->load->view('STYLES/header');
        $this->load->view('NoLoginDonante/sidebarNoLogin');
        $this->load->view('NoLoginDonante/navbar2');
		$this->load->view('NoLoginDonante/Body/news',$data); 
	}




}
?>
