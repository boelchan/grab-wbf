<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		
		$this->load->model('m_player');
		
		$data['player'] = $this->m_player->pemainPilihan();
		$data['content'] = $this->load->view('v_select_player', $data,TRUE);
		$this->load->view('v_main', $data);
	}


}