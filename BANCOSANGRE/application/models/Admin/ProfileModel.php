<?php
class ProfileModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }

    //Funcion para recoger los datos del usuario
    public function getUserData($user_id)
    {
        $this->db->select('*'); 
        $this->db->from('user');
        $this->db->where('user.user_id', $user_id);
        $query = $this->db->get();
        return $query->row();
    }


}
?>
 