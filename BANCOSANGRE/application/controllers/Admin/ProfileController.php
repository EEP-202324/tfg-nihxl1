<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProfileController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Admin/ProfileModel'); 
    }

    public function index()
    {
        $userId = $this->session->userdata('user_id');

        $userData = $this->ProfileModel->getUserData($userId);

        if (!$userData) {
            echo "Error: No se encontraron los datos del usuario.";
            return;
        }
        
        $data['userData'] = $userData;

        $this->load->view('STYLES/header');
                $this->load->view('Admin/SidebarAdmin');
                $this->load->view('Admin/Body/Profile', $data);
                $this->load->view('Admin/FooterAdmin');
    }
}
?>

