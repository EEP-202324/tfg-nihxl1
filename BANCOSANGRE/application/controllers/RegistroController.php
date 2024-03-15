<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RegistroController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('session');
        
        $this->load->library('form_validation');
        $this->load->model('RegistroModel');
    }

    function hola()
    {
        echo base_url();
    }

    public function vistaregistro()
    {
        // $this->form_validation->set_rules('nombre', 'nombre', 'required');
        // $this->form_validation->set_rules('apellido', 'apellido', 'required');
        // $this->form_validation->set_rules('direccion', 'direccion', 'required');
        // $this->form_validation->set_rules('fechaNacimiento', 'fecha_nacimiento','required|valid_date');
        // $this->form_validation->set_rules('telefono', 'telefono', 'required');
        // $this->form_validation->set_rules('email', 'email', 'required|valid_email|is_unique[usuario.email]');
        // $this->form_validation->set_rules('password', 'password', 'required|min_length[8]|max_length[20]|regex_match[/^(?=.*[A-Z])(?=.*\d)/]');
        // $this->form_validation->set_rules('genero', 'genero', 'required');

        // if ($this->form_validation->run() == FALSE) {
        $this->load->view('STYLES/header');
        $this->load->view('Registro');
        // } else {
        //     $datosForm = $this->input->post();
        //     var_dump($datosForm);die();
        //     if ($this->RegistroModel->register($datosForm)) {
        //         redirect(base_url().'RegistroController/hola');
        //     } else {
        //         $this->load->view('STYLES/header');
        //         $this->load->view('Registro');
        //     }
        // }
    }

    function validarRegistro()
    {
        $datosForm= $this->input->post();
        
        if ($this->RegistroModel->register($datosForm))
        {
            $this->session->set_flashdata('success','registro correcto');
            echo TRUE;
        }
        else{
            $this->session->set_flashdata('error','registro erroneo');
           echo FALSE;
        }
    }
}
?>