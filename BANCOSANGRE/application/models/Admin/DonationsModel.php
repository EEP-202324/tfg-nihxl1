<?php
class NewsModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }
   
    function createNew($name, $description)
    {   
        
        $pattern = "/\bhttps?:\/\/\S+\b/";
        preg_match($pattern, $description, $matches);
        $media_url = isset($matches[0]) ? $matches[0] : '';
       
        $data = array(
            'name' => $name,
            'description' => $description,
            'multimedia' => $media_url
        );
        $this->db->insert('news', $data);
        return $this->db->insert_id(); 
    }

    function obtenerNoticias()
    {
        $query = $this->db->get('news');
        return $query->result_array();
    }

    function createNewDonor()
    {
        $query =$this->db->insert();
        return $query->result_array();
    }

    function showAllDonors()
    {
        $query=$this->db->get('donors');
        return $query->result_array();
    }

    public function getUserDonor($userId)
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
