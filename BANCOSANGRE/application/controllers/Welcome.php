<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->helper('url'); 
		$this->load->library('session'); 
    }

	public function index()
	{
		$this->load->view('STYLES/header');
		$this->load->view('NoLoginDonante/sidebar_nologin');
		$this->load->view('NoLoginDonante/header_nologin');
		$this->load->view('welcome_message');
		$this->load->view('NoLoginDonante/footer_nologin');
	}
}
?>
