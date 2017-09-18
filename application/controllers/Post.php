<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {
	public function index(){
    $this->load->model('Model_security');
    $this->Model_security->getsecurity();

    $this->load->view('write-post');
	}

  public function write_post(){
      $config['upload_path']          = './uploads/';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['max_size']             = '100000';
      $config['max_width']            = '50000';
      $config['max_height']           = '50000';

      $this->load->library('upload', $config);

      if ( ! $this->upload->do_upload('foto')){
              $error = $this->upload->display_errors();

              echo $error;
      }else{
				//Membuat data dari form dalam array sehingga mudah dimasukkan dalam db
				$img = $this->upload->data();
				$gambar = $img['file_name'];

				$data['judul'] = $this->input->post('judul');
				$data['body'] = $this->input->post('body');
				$data['create_at'] = date("Y-m-d h:i:sa");
				$data['post_by'] = $this->session->userdata('nama');
				$data['id_post_by'] = $this->session->userdata('id_user');
				$data['foto'] = 'uploads/'.$gambar;

				$this->db->insert('posts',$data);
				redirect('home');
      }
  }
}
