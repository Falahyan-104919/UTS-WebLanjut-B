<?php

class About extends CI_Controller{

    public function index(){

        $data['judul'] = "About || Koperasi Himakom";

        $this->load->view('template/header', $data);
        $this->load->view('about/index');
        $this->load->view('template/footer');

    }


    public function anggota(){

        $data['judul'] = "Anggota Kelompok || Koperasi Himakom";

        $this->load->view('template/header', $data);
        $this->load->view('about/anggota');
        $this->load->view('template/footer');

    }

}