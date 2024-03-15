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
        $query = $this->db->get_where('usuario', array('id_usuario' => $userId));
        $row = $query->row_array();

        if ($query->num_rows() > 0) {
            $this->session->set_userdata('user_id', $row['id_usuario']);
            return $row;
        } else {
            return false;
        }
    }
}
?>
