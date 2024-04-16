<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BloodManagementModel extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_pouches_data() {
        $this->db->select('type, quantity');
        $this->db->from('pouches');
        $query = $this->db->get();
        return $query->result_array();
    }
}
?>