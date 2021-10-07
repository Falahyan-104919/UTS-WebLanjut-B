<?php

class Anggota_model extends CI_model{

    public function getAllAnggota(){

        return $this->db->get('anggota')->result_array();

    }

    public function tambahDataAnggota(){

        $data = [
            "nama" => $this->input->post('nama', true),
            "no_hp" => $this->input->post('no_hp', true),
            "alamat" => $this->input->post('alamat', true),
            "gender" => $this->input->post('gender', true) 
        ];

        $this->db->insert('anggota', $data);

    }

    public function hapusDataAnggota($id){
        $this->db->where('id', $id);
        $this->db->delete('anggota');
    }

    public function getAnggotaById($id){
        return $this->db->get_where('anggota', ['id'=> $id])->row_array();
    }

    public function editDataAnggota(){
        $data = [
            "nama" => $this->input->post('nama', true),
            "no_hp" => $this->input->post('no_hp', true),
            "alamat" => $this->input->post('alamat', true),
            "gender" => $this->input->post('gender', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('anggota', $data);

    }

    public function cariDataAnggota(){
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('alamat', $keyword);
        $this->db->or_like('no_hp', $keyword);
    }

    public function getAnggota($limit, $start, $keyword = null){

        if($keyword){
            $this->db->like('nama', $keyword);
            $this->db->or_like('no_hp', $keyword);
            $this->db->or_like('alamat', $keyword);
            $this->db->or_like('gender', $keyword);
        }

        return $this->db->get('anggota', $limit, $start)->result_array();

    }

    public function countAllAnggota(){
        return $this->db->get('anggota')->num_rows();
    }

}