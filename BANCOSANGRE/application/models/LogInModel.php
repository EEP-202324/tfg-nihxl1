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
        $query = $this->db->select('u.user_id, u.email, u.password, u.role_id, r.role_name as role')
            ->from('user u')
            ->join('roles r', 'u.role_id = r.role_id', 'right')
            ->where('email', $email)
            ->where('password', $password)
            ->get();

        $row = $query->row_array();
        // var_dump($row);
        // var_dump($query);
        
        if ($query->num_rows() > 0) {
            $this->session->set_userdata('user', $email);
            $this->session->set_userdata('role_id', $row['role_id']);
            //var_dump($_SESSION);die();   

            return true;
        } else {
            return false;
        }
        
    }

}
?>
