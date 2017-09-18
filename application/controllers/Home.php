<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index($page='home'){
		$this->db->order_by("create_at", "asc");
		$isi['data'] = $this->db->get('posts');

		$this->load->view($page, $isi);
	}
}
