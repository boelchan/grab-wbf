<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_player extends MY_Model {

    public $table = 'm_player';
    public $primary_key = 'player_id';
    public $protected_attributes = array('player_id');

    public function save($player_name)
    {
        $form = array('player_name' => $player_name );

        if ($cekPlayer = $this->get($form)) 
        {
            $res = $cekPlayer->player_id;
        }
        else
        {
            $res = $this->insert($form);
        }

        return $res;
    }

    public function pemainPilihan ()
    {
        $this->table = 'v_player_pilihan';
        return $this->get_all();
    }


}
