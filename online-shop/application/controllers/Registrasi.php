<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {
    
    function __construct() 
    {
        parent::__construct();
        $this->load->model('M_User');
        $this->load->model('M_Registrasi');
        $this->load->library('session');
    }

    public function registrasi()
    {
        $this->load->view('V_registrasi');
    }

    public function daftar_baru()
    {
        $nama_lengkap = $this->input->post('nama_lengkap');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $gender = $this->input->post('gender');
        $no_hp = $this->input->post('no_hp');
        $no_ktp = $this->input->post('no_ktp');
        $asal_kota = $this->input->post('asal_kota');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        if ($this->M_User->cek_email($email))
        {
            $data['error_message'] = 'Email sudah dipakai';
            $this->load->view('V_registrasi', $data);
        } else 
        {
            $data = array(
                'nama_lengkap' => $nama_lengkap,
                'tanggal_lahir'	=> $tanggal_lahir,
                'tempat_lahir' => $tempat_lahir,
                'gender' => $gender,
                'no_hp' => $no_hp,
                'no_ktp' => $no_ktp,
                'asal_kota' => $asal_kota,
                'email' => $email,
                'password' => $password
            );
            $result = $this->M_Registrasi->insert_new_data($data);
            if($result){
                redirect(site_url('auth/login'));
            } else {
                $data['error_message'] = 'Error';
                $this->load->view('V_registrasi', $data);
            }
        }
    }
}