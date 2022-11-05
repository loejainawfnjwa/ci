<?php

class web extends CI_Controller{
    public function lanjut ()
    {
        echo 'WEB Framework';
    }

    public function tampil()
    {
        return $this->load->view('v_tampil');
    }

    //keterangan form
    public function form()
    {
        echo 'Form input';
    }
}
