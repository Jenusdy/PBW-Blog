<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index(){
		$this->load->view('login');
	}

	public function get_login(){
    //Mengambil data dari form

    $email = $this->input->post('email');
    $password = $this->input->post('password');
    //Meload model login untuk berhubungan dengan database

		echo $email,$password;
    $this->load->model('model_login');
    $this->model_login->getlogin($email,$password);
  }

	public function sign_out(){
		// $this->load->library('session');
		$this->session->sess_destroy();
		redirect('home');
	}
}
