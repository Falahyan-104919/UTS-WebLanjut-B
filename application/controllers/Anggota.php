<?php

class Anggota extends CI_Controller{

    public function __construct(){

        parent:: __construct();
        $this->load->model('Anggota_model');
        $this->load->library('form_validation');


    }

    public function index(){

        $data['judul'] = 'Anggota | Koperasi Himakom';

        if($this->input->post('submit')){
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        }else{
            $data['keyword'] = $this->session->userdata('keyword');
        }

        $this->load->library('pagination');

        $this->db->like('nama', $data['keyword']);
        $this->db->or_like('no_hp', $data['keyword']);
        $this->db->or_like('alamat', $data['keyword']);
        $this->db->or_like('gender', $data['keyword']);
        $this->db->from('anggota');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 10;

        $this->pagination->initialize($config);


        $data['start'] = $this->uri->segment(3);
        $data['anggota'] = $this->Anggota_model->getAnggota($config['per_page'], $data['start'], $data['keyword']);

        $this->load->view('template/header', $data);
        $this->load->view('anggota/index', $data);
        $this->load->view('template/footer');

    }

    public function tambah(){
        
        
        $data['judul'] = "Tambah Anggota | Koperasi Himakom";
        
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('no_hp', 'No. HP', 'required|min_length[12]|numeric');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('gender', 'Jenis Kelamin', 'required');

        if($this->form_validation->run() == FALSE){
        $this->load->view('template/header', $data);
        $this->load->view('anggota/tambah');
        $this->load->view('template/footer');
        }else{
            $this->Anggota_model->tambahDataAnggota();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('anggota');
        }
    }
    
    public function hapus($id){
        $this->Anggota_model->hapusDataAnggota($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('anggota');
    }

    public function detail($id){
        
        $data['judul'] = "Detail Data Anggota | Koperasi Himakom";
        $data['anggota'] = $this->Anggota_model->getAnggotaById($id);
        
        $this->load->view('template/header', $data);
        $this->load->view('anggota/detail', $data);
        $this->load->view('template/footer');
    }
    
    public function edit($id){
        $data['judul'] = "Edit Anggota | Koperasi Himakom";
        $data['anggota'] = $this->Anggota_model->getAnggotaById($id);
        
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('no_hp', 'No. HP', 'required|min_length[12]|numeric');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('gender', 'Jenis Kelamin', 'required');
        
        if($this->form_validation->run() == FALSE){
        $this->load->view('template/header', $data);
        $this->load->view('anggota/edit', $data);
        $this->load->view('template/footer');
        }else{
            $this->Anggota_model->editDataAnggota();
            $this->session->set_flashdata('flash', 'Di-Edit');
            redirect('anggota');
        }
    }

}