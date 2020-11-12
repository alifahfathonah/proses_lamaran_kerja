<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info_Loker extends CI_Controller 
{
    public function __construct()
	{
		parent::__construct();
        $this->load->model('Info_Loker_Model');
    }

    public function index()
    {
        $data['judul'] = 'Info Lowongan Pekerjaan';
        $data['tampil'] = $this->Info_Loker_Model->tampil();
        $this->load->view('layouts/header-1', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('info_loker', $data);
        $this->load->view('layouts/footer');
    }

    public function tambah()
    {
        $data = array(
            'nama_loker' => $this->input->post('nama_loker', true),
            'url_loker' => $this->input->post('url_loker', true)
        );
        if(($this->Info_Loker_Model->tambah($data, 'data_info_loker')) !== FALSE){
			$this->session->set_flashdata('success', 'Data lamaran mu berhasil disimpan');
		}else{
			$this->session->set_flashdata('error', 'Data lamaran mu gagal disimpan');
		}
        redirect('Info_Loker');
    }

    public function ubah($id_info_loker)
    {
        $data = array(
            'nama_loker' => $this->input->post('nama_loker', true),
            'url_loker' => $this->input->post('url_loker', true)
        );
        if(($this->Info_Loker_Model->ubah($id_info_loker, $data)) !== FALSE){
            $this->session->set_flashdata('success', 'Data lamaran mu berhasil dirubah');
        }else{
            $this->session->set_flashdata('error', 'Data lamaran mu gagal dirubah');
		}
        redirect('Info_Loker');
    }

    public function hapus($id_info_loker)
	{
		$where = array('id_info_loker ' => $id_info_loker );
		$this->Info_Loker_Model->hapus($where, 'data_info_loker');
		$this->session->set_flashdata('warning', 'Data lamaran mu berhasil dihapus');
		redirect('Info_Loker');
    }
}