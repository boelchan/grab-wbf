
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function index()
    {
        $data[''] = '';
		$data['content'] = $this->load->view('v_login', $data,TRUE);
		$this->load->view('v_main', $data);
    }

    public function authPost()
    {
        
        $this->load->model('m_auth');
        
		$this->m_auth->login_post();
		redirect(site_url('grab'),'refresh');
    }


	public function logout()
	{
		$this->session->sess_destroy();
		redirect(site_url(),'refresh');
	}


}

/* End of file Auth.php */