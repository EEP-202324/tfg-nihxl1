<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Request extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Donor/RequestModel');

        if(!$this->session->userdata('user'))
        {
            redirect(base_url());
        }
    }

    public function index()
    {
        $user_id = $this->session->userdata('user')['user_id'];

        $donor_id = $this->RequestModel->getDonorIdFromUserId($user_id);

        if ($donor_id) {
            $data['requests'] = $this->RequestModel->getRequests($donor_id);
        } else {
            $data['requests'] = array();
        }

        $this->load->view('STYLES/header');
        $this->load->view('Donor/SidebarDonor');
        $this->load->view('Donor/Body/Requests', $data);
    }
}
?>
