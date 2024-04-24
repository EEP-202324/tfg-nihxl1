<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patients extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Admin/PatientModel');
    }

    public function index() {
        $this->load->view('STYLES/header');
        $this->load->view('Admin/SidebarAdmin');
        $this->load->view('Admin/Body/Patients');
        $this->load->view('Admin/FooterAdmin');
    }  

    public function register_patient() {
        
        $this->load->view('STYLES/header');
        $this->load->view('Admin/SidebarAdmin');
        $this->load->view('Admin/Body/AddPatient');
        $this->load->view('Admin/FooterAdmin');
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $patient_data = array(
                'name' => $this->input->post('name'),
                'lastname' => $this->input->post('lastname'),
                'address' => $this->input->post('address'),
                'birthday' => $this->input->post('birthday'),
                'phone' => $this->input->post('phone'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
                'age' => $this->input->post('age'),
                'gender' => $this->input->post('gender'),
                'blood_type' => $this->input->post('bloodType'),
                'disease' => $this->input->post('disease'),
                'alergies' => $this->input->post('alergies')
            );

            $result = $this->PatientModel->register_patient($patient_data);

            if ($result) {
                echo "<script>alert('Paciente registrado.');</script>";
            } else {
                echo "<script>alert('Fallo al registrar el paciente.');</script>";
            }
        }
    }
}
?>
