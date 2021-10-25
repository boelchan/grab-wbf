<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_event extends MY_Model {

    public $table = 'm_event';
    public $primary_key = 'event_id';
    public $protected_attributes = array('event_id');

    public function save($data)
    {
        $form = array('event_name' => $data['event_name'], 'event_date' => $data['event_date'] );

        if ($cekEvent = $this->get($form)) 
        {
            $res = $cekEvent->event_id;
        }
        else
        {
            $res = $this->insert($form);
        }

        return $res;
    }

    public function getTahunMain($player_id)
    {
        $this->table = 'v_turnament';
        return $this->where('player_id', $player_id)
                    ->group_by('year')
                    ->get_all()
                    ;
    }


}
