<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Donations extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Donor/DonationsHistoryModel');

        if (!$this->session->userdata('user')) {
            redirect(base_url());
        }
    }

    //Función para carga la vista de donaciones del usuario donante
    public function index()
    {
        $user_id = $this->session->userdata('user')['user_id'];

        $donor_id = $this->DonationsHistoryModel->getDonorIdFromUserId($user_id);

        if ($donor_id) {
            $data['donations'] = $this->DonationsHistoryModel->getDonorDonations($donor_id);
        } else {
            $data['donations'] = array();
        }

        try {
            $this->load->view('STYLES/header');
            $this->load->view('Donor/SidebarDonor', $data);
            $this->load->view('Donor/Body/Donations');
        } catch (Exception $e) {
            echo 'Error loading views: ' . $e->getMessage();
        }
    }
}
?>
