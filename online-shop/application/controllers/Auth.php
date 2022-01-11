<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    function __construct() 
    {
        parent::__construct();
        $this->load->model('M_User');
        $this->load->library('session');
    }
        
    public function index()
    {
        $this->load->view('V_Login');
    }

    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if(isset($post['login'])) {
            $query = $this->M_User->login($post);
            if($query->num_rows() > 0) {
                $row = $query->row();
                $params = array(
                    'id' => $row->id,
                    'nama' => $row->nama_lengkap
                );
                $this->session->set_userdata($params);
                echo "<script> 
                        alert('Login Berhasil');
                        window.location='".site_url('C_home_page')."';
                      </script>";
            } else {
                echo "<script> 
                        alert('Login Gagal, email / password salah');
                        window.location='".site_url('auth')."';
                      </script>";
            }
        }
    }
}