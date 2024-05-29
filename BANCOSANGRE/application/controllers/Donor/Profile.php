<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Donor/ProfileSettingsModel'); 

        if(!$this->session->userdata('user'))
        {
            redirect(base_url());
        }
    }
 
    //Función para carga la vista del perfil del usuario donante
    public function index()
	{
        $user_id = $this->session->userdata('user')['user_id'];
        $data['user'] = $this->ProfileSettingsModel->getUserData($user_id); 

		$this->load->view('STYLES/header');
        $this->load->view('Donor/SidebarDonor', $data);
		$this->load->view('Donor/Body/Profile', $data); 
	} 
}
?>
