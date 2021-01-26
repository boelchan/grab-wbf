
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Player extends CI_Controller {

    public function view($value='')
    {
        $this->load->model('m_player');
        $this->load->model('m_event');
		
		$data['player_id'] = $value;
		$data['year'] = $this->m_event->getTahunMain($value);
		$data['content'] = $this->load->view('v_list_turnament', $data, TRUE);
		$this->load->view('v_main', $data);
    }

}

/* End of file Player.php */
