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

    // function deleteNewsById($id)
    // {
    // $this->db->where('newsID', $id);
    // $this->db->delete('news');
    // }
    function deleteNewsById($id)
    {
        $this->db->where('newsID', $id);
        $result = $this->db->delete('news');
    
        if ($result) {
            return true; // Deletion successful
        } else {
            return false; // Deletion failed
        }
    }
    


}
?>
