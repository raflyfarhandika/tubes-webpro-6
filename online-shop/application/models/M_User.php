<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_User extends CI_Model {

    public function login($post)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('email', $post['email']);
        $this->db->where('password', sha1($post['password']));
        $query = $this->db->get();
        return $query;
    }

    public function cek_email($email)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where("email = " . "'" . $email . "'");
        $this->db->limit(1);
        $query = $this->db->get();
        if($query->num_rows() == 1) {
            return true; 
        } else {
            return false;
        }
    }
}