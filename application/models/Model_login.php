<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_login extends CI_Model {
	//Pembuatan fungsi get login
	public function getlogin($email, $password){
		//Melakukan encryption password dengan md5
		$pwd = md5($password);
		//Melakukan query ke database
		$this->db->where('email', $email);
		$this->db->where('password', $pwd);
		$query = $this->db->get('users');
		//Mengecek jika usernya dicari ada
		if($query->num_rows()>0){
			//Jika user ada di db
			foreach ($query->result() as $row) {
				$sess = array('id_user' => $row->id_user,
											'nama' 	=> $row->nama,
											'email' => $row->email,
											'password' 	=> $row->password,
                      'status' => $row->status,
											'foto'	=> $row->foto
										);
				// $this->session->set_userdata($sess);
				//Menyimpan session dari user
				$this->session->set_userdata($sess);
				//Meriderict ke halaman home
				redirect('home');
			}
		}else{
			//Jika tidak ada muncul error
			$this->session->set_flashdata('info', "Maaf, email atau pasword salah");
			//Redirect kehalaman login
			redirect('login');
		}
	}
}
?>
