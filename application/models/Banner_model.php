<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Banner_model extends CI_Model
{
    public function getbanner($id = NULL) {
		
        $this->db->where('status', 0);
        if ($id) {
            $this->db->where('id', $id);
            return $this->db->get('tbl_banner')->row();
        }
        $this->db->order_by('id', 'desc');
        return $this->db->get('tbl_banner')->result();
    }

    public function list_banner(){
		
        $query = $this->db->query("SELECT * FROM tbl_banner WHERE status = 0");
        return $query->result();
    }

}