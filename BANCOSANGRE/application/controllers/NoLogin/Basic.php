<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Basic extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function WhyGiveBlood()
	{
		$this->load->view('STYLES/header');
        $this->load->view('NoLoginDonante/sidebarNoLogin');
        $this->load->view('NoLoginDonante/navbar');
		$this->load->view('NoLoginDonante/Body/WhyGiveBlood'); 
	}  

    public function BloodTypes()
	{
		$this->load->view('STYLES/header');
        $this->load->view('NoLoginDonante/sidebarNoLogin');
        $this->load->view('NoLoginDonante/navbar');
		$this->load->view('NoLoginDonante/Body/bloodtypes'); 
	} 
}
?>
