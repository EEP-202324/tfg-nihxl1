<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistroController extends CI_Controller {
 
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('RegistroModel');
    }

    public function guardar_registro() {
        
        $name = $this->input->post('nombre'); 
        $lastname = $this->input->post('apellido');
        $address = $this->input->post('direccion');
        $birthday = $this->input->post('fecha_nacimiento');
        $phone = $this->input->post('telefono');
        $email = $this->input->post('email');
        $password = md5($this->input->post('password')); 
        $gender = $this->input->post('genero');
        $age = $this->input->post('age');

        $datosForm = array(
            'name' => $name,
            'lastname' => $lastname,
            'address' => $address,
            'birthday' => $birthday,
            'phone' => $phone,
            'email' => $email,
            'password' => $password, 
            'gender' => $gender,
            'age' => $age,
            'role_id' => 2 
        );

        if ($this->RegistroModel->guardar_usuario($datosForm)) {
            $this->session->set_flashdata('success', 'Registro correcto');
            echo "<script>alert('Registro correcto.');</script>";
            

            redirect(base_url().'Welcome/index'); 
        } else {
            $this->session->set_flashdata('error', 'Registro incorrecto');
            echo "<script>alert('Registro incorrecto \n Vuelva a intentarlo, por favor.');</script>";
            redirect(base_url().'Welcome/index'); 
        }
        


        
    } 
}
?>
