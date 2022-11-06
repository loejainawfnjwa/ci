<?php

class mahasiswa extends CI_Controller {

    public function lanjut ()
    {
        echo 'WEB Framework';
    }
    public function index()
    {
        return $this->load->view('v_mahasiswa');
    }

    //keterangan form
    public function form()
    {
        echo 'Form input';
    }
}