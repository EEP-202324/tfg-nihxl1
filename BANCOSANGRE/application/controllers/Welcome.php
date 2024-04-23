<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->helper('url'); 
		$this->load->library('session'); 
    }

	function index()
	{
		$this->load->view('STYLES/header');
		$this->load->view('NoLoginDonante/sidebarNoLogin');
		$this->load->view('NoLoginDonante/Body/welcome_message');
	}

}
?>
