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
        $query = $this->db->select('u.id_usuario, u.email, u.password, u.rol_id, r.nombre as rol')
            ->from('usuario u')
            ->join('roles r', 'u.rol_id = r.id', 'left')
            ->where('email', $email)
            ->where('password', $password)
            ->get();

        $row = $query->row_array();
        // var_dump($row);
        // var_dump($query);
        
        if ($query->num_rows() > 0) {
            $this->session->set_userdata('user', $email);
            $this->session->set_userdata('rol_id', $row['rol_id']);
            //var_dump($_SESSION);die();   

            return true;
        } else {
            return false;
        }
        
    }

        
}
?>
