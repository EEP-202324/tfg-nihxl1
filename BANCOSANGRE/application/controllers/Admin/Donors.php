<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Donors extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Admin/DonorModel');
    }

    function hola(){
        echo base_url();
    }

    public function index()
	{
        $data['donors'] = $this->DonorModel->get_all_donors();
		$this->load->view('STYLES/header');
        $this->load->view('Admin/SidebarAdmin');
		$this->load->view('Admin/Body/Donors',$data);
        $this->load->view('Admin/FooterAdmin');
	}  

    public function get_donor($user_id) {

        $data['donor'] = $this->DonorModel->get_donor($user_id);
        echo json_encode($data);
    }
    

    public function register_donor() {

        $data['diseases'] = $this->DonorModel->get_all_diseases();
    
        $this->load->view('STYLES/header');
        $this->load->view('Admin/SidebarAdmin');
        $this->load->view('Admin/Body/AddDonor',$data);
        $this->load->view('Admin/FooterAdmin');
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $donor_data = array(
                'name' => $this->input->post('name'),
                'lastname' => $this->input->post('lastname'),
                'address' => $this->input->post('address'),
                'birthday' => $this->input->post('birthday'),
                'phone' => $this->input->post('phone'),
                'email' => $this->input->post('email'),
                'password' => md5($this->input->post('password')), // Hashear la contraseña
                'age' => $this->input->post('age'),
                'gender' => $this->input->post('gender'),
                'blood_type' => $this->input->post('bloodType'),
                'disease' => $this->input->post('disease'),
                'alergies' => $this->input->post('alergies'),
                'donation_count' => $this->input->post('donationCount'),
                'last_donation_date' => $this->input->post('lastDonation')
            );
    
            $result = $this->DonorModel->register_donor($donor_data);
    
            if ($result) {
                echo "<script>alert('Donante registrado.');</script>";
            } else {
                echo "<script>alert('Fallo al registrar el donante.');</script>";
            }
        }
    }
    



    public function delete($user_id) {
        $result = $this->DonorModel->delete_donor($user_id);
        if ($result) {
            redirect('admin/donors');
        } else {
            
            echo "<script>alert('No se ha borrado el paciente. Vuelva ha intentarlo');</script>";
        }
    }


    public function update_donor() {
        // Obtener datos del formulario
        $donor_data = array(
            'user_id' => $this->input->post('user_id'),
            'name' => $this->input->post('name'),
            // Resto de los campos
        );
    
        // Actualizar paciente en la base de datos
        $result = $this->DonorModel->update_donor($donor_data);
    
        if ($result) {
            echo json_encode(array("success" => true));
        } else {
            echo json_encode(array("success" => false));
        }
    }
}
?>
