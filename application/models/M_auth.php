
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_auth extends MY_Model {

    public $table = 'user';
    public $primary_key = 'ID_USER';
    public $protected_attributes = array('player_id');

	public function login_post()
	{
		$user = $this->input->post('username');
		$pass = $this->input->post('password');

        $where = array('username' => $user, 'password' => $pass);
		if ($r = $this->get($where)) 
        {
			$data = array(
				'logged_in' => true,
				'user_id' => @$r->id_user,
				'user_name' => @$r->username,
				 );
			$this->session->set_userdata($data);

			return true;
		} else {
			return false;
		}
	}

}

/* End of file M_auth.php */
