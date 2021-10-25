<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_t_participant extends MY_Model {

    public $table = 't_participant';
    public $primary_key = 'participant_id';
    public $protected_attributes = array('participant_id');

    public function save($event_id, $player_id)
    {
        $form = array('event_id' => $event_id, 'player_id' => $player_id );

        if (!$this->get($form)) 
        {
            $this->insert($form);
        }

        return TRUE;
    }

}
