<?php
class LogInModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }

    function log($email, $password)
    {   
        $query = $this->db->select('user_id, email, password, role_id')
            ->from('user')
            ->where('email', $email)
            ->get();

        if ($query->num_rows() > 0) {
            $row = $query->row_array();
            if (password_verify($password, $row['password'])) {
                return true;
            }
        }
        
        return false;
    }

    function getUserData($email)
    {
        $query = $this->db->select('user_id, email, role_id')
            ->from('user')
            ->where('email', $email)
            ->get();
        
        return $query->row_array();
    }
}
?>
