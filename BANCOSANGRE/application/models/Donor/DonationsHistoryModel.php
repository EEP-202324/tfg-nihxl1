<?php
class DonationsHistoryModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }

    public function getDonorDonations($donor_id)
    {
        $this->db->select('d.*, u.name, u.lastname, u.email');
        $this->db->from('donation as d');
        $this->db->join('user as u', 'd.donor_id = u.user_id');
        $this->db->where('d.donor_id', $donor_id);
        $query = $this->db->get();
        return $query->result();
    }
}
?>