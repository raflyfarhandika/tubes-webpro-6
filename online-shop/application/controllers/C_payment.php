<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_payment extends CI_Controller {

	public function index()
	{
		$this->load->view('V_payment');
	}
}