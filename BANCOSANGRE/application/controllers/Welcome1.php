<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Welcome1 extends CI_Controller
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
        $this->load->view('NoLoginDonante/sidebarNoLogin');
        $this->load->view('NoLoginDonante/navbar');
		$this->load->view('NoLoginDonante/Body/welcome_message');
        
	}  
}
?>
