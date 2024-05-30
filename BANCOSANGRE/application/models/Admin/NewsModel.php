<?php
class NewsModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }

    //Funcion para crear una nueva noticia
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
 
    //Funcion para recoger todas las noticias de la bbdd
    function obtenerNoticias()
    {
        $query = $this->db->get('news');
        return $query->result_array();
    }


    //Funcion para recoger los datos de las ultimas 5 noticias
    public function obtenerNoticias5()
    {
        $query = $this->db->query('SELECT * FROM news ORDER BY newsID DESC LIMIT 5');
        return $query->result_array();
    }


    //Funcion para recoger los datos y eliminar la ultima noticia
    function deleteNewsById($id)
    {
        $this->db->where('newsID', $id);
        $result = $this->db->delete('news');
    
        if ($result) {
            return true; 
        } else {
            return false; 
        }
    }



    


    


}
?>
