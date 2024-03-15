<?php
class RegistroModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }


    function register($datosForm)
    {
         $this->db->insert('usuario', $datosForm);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
?>

