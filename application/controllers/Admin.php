<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index($page='admin'){
    $this->load->model('Model_security');
    $this->Model_security->getsecurity();

		$this->db->order_by("create_at", "desc");
		$isi['data'] = $this->db->get('posts');
		$this->load->view($page, $isi);
	}

  public function edit($id){
    $this->load->model('Model_security');
    $this->Model_security->getsecurity();

    $this->db->where('id_post', $id);
    $isi['data'] = $this->db->get('posts');

		$this->load->view('write-post0', $isi);
  }

  public function hapus($id){
    $this->load->model('Model_security');
    $this->Model_security->getsecurity();

    $this->db->where('id_post', $id);
    $data = $this->db->get('posts');

    foreach ($data->result() as $row) {
      unlink($row->foto);
    }

    $this->db->where('id_post', $id);
    $this->db->delete('views');

    $this->db->where('id_post', $id);
    $this->db->delete('posts');
    redirect('admin');
	}
}
