<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_Registrasi extends CI_Model {

    public function insert_new_data($data)
    {
        return $this->db->insert('user', $data);
    }
}