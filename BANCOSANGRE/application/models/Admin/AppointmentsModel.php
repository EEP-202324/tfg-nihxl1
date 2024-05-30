<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AppointmentsModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_appointments()
    {
        $this->db->select('appointments.appointment_id, 
                           user.user_id AS name, 
                           doctor.name AS doctor, 
                           doctor.specialization, 
                           appointments.hospital, 
                           appointments.appointment_date, 
                           appointments.reason, 
                           appointments.status');
        $this->db->from('appointments');
        $this->db->join('user', 'user.user_id = appointments.patient_id', 'left');
        $this->db->join('doctor', 'doctor.user_id = appointments.doctor_id', 'left');
        $query = $this->db->get();
    
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array(); 
        }
    }
    
}
?>
