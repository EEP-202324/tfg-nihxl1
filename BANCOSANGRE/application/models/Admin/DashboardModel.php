

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardModel extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_blood_data() {
        $this->db->select('type, rh_factor, SUM(quantity) as total_quantity');
        $this->db->from('bloodinventory');
        $this->db->group_by(array('type', 'rh_factor'));
        $query = $this->db->get();
        return $query->result_array();
    }
}
?>

