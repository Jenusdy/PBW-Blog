<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Read extends CI_Controller {
	public function index($id){
    $this->updateView($id);
    $this->db->where('id_post', $id);
    $isi['data'] = $this->db->get('posts');

    $isi['view'] = $this->db->where('id_post', $id)->get('views')->num_rows();

		$this->load->view('read-post', $isi);
	}

  function updateView($id){
    $data['id_post'] = $id;
    $data['ip_client'] = $this->getUserIP();
    $data['time'] = date("Y-m-d h:i:sa");

		$this->db->insert('views',$data);
  }

  function visitor_count($id) {
    $query = $this->db->query("SELECT COUNT(*) as count_rows FROM views WHERE id_post=$id");
    return $query->result();
  }

  function getUserIP(){
      $client  = @$_SERVER['HTTP_CLIENT_IP'];
      $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
      $remote  = $_SERVER['REMOTE_ADDR'];

      if(filter_var($client, FILTER_VALIDATE_IP))
      {
          $ip = $client;
      }
      elseif(filter_var($forward, FILTER_VALIDATE_IP))
      {
          $ip = $forward;
      }
      else
      {
          $ip = $remote;
      }

      return $ip;
  }

}
