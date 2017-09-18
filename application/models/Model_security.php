<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_security extends CI_Model {
	//Membuat function get security
	public function getsecurity()
	{
		//Mengecek apakah session masih ada atau tidak
		$email = $this->session->userdata('email');
		if(empty($email)){
			//Jika session sudah hilang maka di redirect ke halaman login lagi
			$this->session->sess_destroy();
			redirect('login');
		}
	}
}
