<?php
class QuizModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }


    //Funcion para recoger el id del donante
    public function getDonorIdFromUserId($user_id)
    {
        $this->db->select('donor_id');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('donor');
        if ($query->num_rows() > 0) {
            $result = $query->row();
            return $result->donor_id;
        } else {
            return null; 
        }
    }

    //Funcion para  guardar el resultado del quiz
    public function save_quiz_result($donor_id, $result)
    {
        $data = array(
            'donor_id' => $donor_id,
            'resultado' => $result
        );
        $this->db->insert('quiz', $data);
    }

    //Funcion para recoger los datos del quiz
    public function getQuizResult($donor_id)
    {
        $this->db->select('resultado');
        $this->db->where('donor_id', $donor_id);
        $query = $this->db->get('quiz');
        return $query->result_array();
    }
}
?>
