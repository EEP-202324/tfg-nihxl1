<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PatientModel extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }
    
    public function register_patient($patient_data) {

        // log_message('debug', 'Este es un mensaje de depuración.'); 
        
        $user_data = array(
            'name' => $patient_data['name'],
            'lastname' => $patient_data['lastname'],
            'birthday' => $patient_data['birthday'],
            'address' => $patient_data['address'],
            'phone' => $patient_data['phone'],
            'email' => $patient_data['email'],
            'password' => $patient_data['password'],
            'age' => $patient_data['age'],
            'gender' => $patient_data['gender'],
            'role_id' => 3
        );
    
        $this->db->insert('user', $user_data);
        $user_id = $this->db->insert_id();
    
        $patient_data = array(
            'user_id' => $user_id,
            'health_info' => $patient_data['disease'], 
            'blood_type' => $patient_data['blood_type'], 
            'alergies' => $patient_data['alergies']
        );
    
        $this->db->insert('patient', $patient_data);
    
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    

}
