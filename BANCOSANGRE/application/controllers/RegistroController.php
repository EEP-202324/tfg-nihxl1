<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model('RegistroModel');
    }

    public function guardar_registro() {
        
        $name = $this->input->post('name');
        $lastname = $this->input->post('lastname');
        $address = $this->input->post('address');
        $birthday = $this->input->post('birthday');
        $phone = $this->input->post('phone');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $gender = $this->input->post('gender');
        $age = $this->input->post('age');

        $datos_usuario = array(
            'name' => $name,
            'lastname' => $lastname,
            'address' => $address,
            'birthday' => $birthday,
            'phone' => $phone,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT), 
            'gender' => $gender,
            'age' => $age,
            'role_id' => 2 
        );

        if ($this->RegistroModel->guardar_usuario($datosForm)) {
            $this->session->set_flashdata('success', 'Registro correcto');
                redirect(base_url().'Donor/Dashboard'); 
        } else {
            $this->session->set_flashdata('error', 'Registro incorrecto');
                redirect('Welcome'); 
        }

    }

    
}

?>