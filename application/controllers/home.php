<?php

class Home extends CI_Controller {

    public function index()
    {
        echo'Rumah ku';
    }
    public function form()
    {
        return $this->load->view('v_tampil');
    }
    
    //keterangan form
    public function form()
    {
        return $this->load->view('v_form');
    }

    //keterangan form mahasiswa
    public function mahasiswa()
    {
        return $this->load->view('v_mahasiswa');
    }
}