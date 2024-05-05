<?php
class ProfileModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }

    public function getUserData($userId)
    {
        $this->db->select('*');
        $query = $this->db->get_where('user', array('user_id' => $userId));
        $row = $query->row_array();

        if ($query->num_rows() > 0) {
            return $row;
        } else {
            return false;
        }
    }
} 
?>
