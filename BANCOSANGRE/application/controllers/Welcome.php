<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Welcome extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Admin/NewsModel');
        $this->load->model('Admin/BloodManagementModel');
        $this->load->model('Admin/DonorModel');

    } 

    public function index()
	{

        $data['news'] = $this->NewsModel->obtenerNoticias5();
        $data['lowest_blood_type'] = $this->BloodManagementModel->get_lowest_blood_type();
        $data['diseases'] = $this->DonorModel->get_all_diseases();


		$this->load->view('STYLES/header');
        $this->load->view('NoLoginDonante/sidebarNoLogin');
		
        $this->load->view('NoLoginDonante/navbar',$data);
		$this->load->view('NoLoginDonante/Body/welcome_message', $data); 
        $this->load->view('NoLoginDonante/footer');

	}  

}
?>
