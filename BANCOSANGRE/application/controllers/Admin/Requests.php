<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Requests extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Admin/RequestsModel');
    }

    public function index()
	{
        $data['requests'] = $this->RequestsModel->get_all_requests();
		$this->load->view('STYLES/header');
        $this->load->view('Admin/SidebarAdmin');
		$this->load->view('Admin/Body/Requests',$data);
        $this->load->view('Admin/FooterAdmin');
	}  


    public function accept_request($requestId)
{
    // Update the request status in the database to 'Accepted'
    $success = $this->RequestsModel->update_request_status($requestId, 'Accepted');
    
    if ($success) {
        echo json_encode(['success' => true, 'message' => 'Solicitud aceptada exitosamente.']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error al aceptar la solicitud.']);
    }
}

// Deny request
public function deny_request($requestId)
{
    $success = $this->RequestsModel->update_request_status($requestId, 'Denied');
    
    if ($success) {
        echo json_encode(['success' => true, 'message' => 'Solicitud denegada exitosamente.']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error al denegar la solicitud.']);
    }
}

public function put_on_hold($requestId)
{
    // Update the request status in the database to 'On Hold'
    $success = $this->RequestsModel->update_request_status($requestId, 'On Hold');
    
    if ($success) {
        echo json_encode(['success' => true, 'message' => 'Solicitud puesta en espera exitosamente.']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error al poner en espera la solicitud.']);
    }
}

}
?>
