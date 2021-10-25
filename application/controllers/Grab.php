<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grab extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        
        // $this->load->model('m_auth');

        if (!$this->session->userdata('logged_in')) redirect(site_url(),'refresh');
        
    }
    

    public function index()
    {
        $data[''] = '';
		$data['content'] = $this->load->view('v_grab', $data,TRUE);
		$this->load->view('v_main', $data);
    }

    public function getData()
    {
        if ($this->input->post('link')) 
        {
            ini_set('max_execution_time', 300);
            // http://bwf.tournamentsoftware.com/sport/event.aspx?id=89C65F89-75B2-4C8C-A56D-561BC8B87264&event=1
            // http://bwf.tournamentsoftware.com/sport/event.aspx?id=A68C6711-5A60-4376-BC9B-253A6DCAAD8C&event=1
            // http://bwf.tournamentsoftware.com/sport/event.aspx?id=7424B11B-7C9E-450D-84D5-48D8A5105EF5&event=1
            
            $urlArr = array();
            // var_dump($strurl);echo "<br/><br/>";
            if (empty($urlArr)) {
                $urlArr = explode(PHP_EOL, $this->input->post('link'));
            }
            // var_dump($urlArr);
            // exit();

            foreach ($urlArr as $key => $value) 
            {
                // if (strpos($value, 'http://www.kki.go.id/cekdokter/form/ysttntx27jsgd/') !== false) {
                    if ($this->url_exists(trim($value))) 
                    {
                        $ambilHtml   = file_get_contents($value);
                        $hasilBersih = $this->bersihBersih($ambilHtml);
                        $this->simpan($hasilBersih);
                    }
            // }
            }
        }

        $data['warning'] = '';
        // $data['warning'] = $this->session->set_flashdata('success', 'Data berhasil ditambahkan COk');
		$data['content'] = $this->load->view('v_grab', $data,TRUE);
		$this->load->view('v_main', $data);

    }

    public function simpan ($data = [])
    {
        // $data = [];
        // $data['event'] = array('event_date' => '2016-01-01', 'event_name' => 'keong cup');
        // $data['players'] = array('abul','becak','cese', 'abula', 'bul', 'a');
        
        $this->load->model('m_event');
        $this->load->model('m_player');
        $this->load->model('m_t_participant');

        $event_id = $this->m_event->save($data['event']);
        foreach ($data['players'] as $key => $value) {
            $player_id = $this->m_player->save($value);
            $this->m_t_participant->save($event_id, $player_id);
        }
    }

    public function bersihBersih($value='')
    {
            $a = explode('<div class="title">', $value);
            $a = explode('</h3><ul', $a[1]);

        $nama = trim(str_replace('<h3>', '', $a[0]));
            
            $tgl = $a[1];
            $tgl = explode('<br /><img src=',$tgl);
            $tgl = explode('Last updated:',$tgl[0]);
            $tgl = explode('day,',$tgl[1]);
                $month_names = array("january"=>'01',"february"=>'02',"march"=>'03',"april"=>'04',"may"=>'05',"june"=>'06',"july"=>'07',"august"=>'08',"september"=>'09',"october"=>'10',"november"=>'11',"december"=>'12');
            $tgl = str_replace(',' , '', trim($tgl[1]));
            $tgl = explode(' ',$tgl);

        $tahun = $tgl[2];

            $hari = $tgl[1];
            $bulan = $month_names[strtolower($tgl[0])];

        $tanggal = $tahun.'-'.$bulan.'-'.$hari;


            $b = explode('</thead><tbody>', $a[1]);
            $b = explode('</tbody>', $b[2]);
            $tPlayer = trim($b[0]);

            $del = array('<tr>', '</tr>', '<td>', '</td>', '<a href=','<td class="right"','"p');
            $tp = trim(str_replace($del, '', $tPlayer));

            $tp = explode('">', $tp);
            $aa = array();

            foreach ($tp as $key => $value) {
                $aa[] = explode('</a>>', $value)[0];
            }
        
        unset($aa[0]);
        
        $hasil['event'] = array('event_date' => $tanggal, 'event_name' => $nama);
        $hasil['players'] = array_values($aa);

        return $hasil;
    }

    public function url_exists($url) {
        if (!$fp = curl_init($url)) return false;
        return true;
    }

}

/* End of file Grabber.php */
/* Location: ./application/controllers/admin/Grabber.php */