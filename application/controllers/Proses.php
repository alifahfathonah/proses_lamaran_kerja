<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proses extends CI_Controller 
{
    public function __construct()
	{
		parent::__construct();
        $this->load->model('Proses_Model');
    }

    public function index()
	{   
        $data['judul'] = 'Semua Lamaran';
		$data['tampil'] = $this->Proses_Model->tampil();
        $this->load->view('layouts/header-2', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('proses', $data);
        $this->load->view('layouts/footer');
    }
    
    public function tambah()
    {
        $data = array(
            'tanggal_dikirim' => $this->input->post('tanggal_dikirim', true),
            'posisi_yang_dilamar' => $this->input->post('posisi_yang_dilamar', true),
            'kirim_dari' => $this->input->post('kirim_dari', true),
            'url_info_loker' => $this->input->post('url_info_loker', true),
            'nama_perusahaan' => $this->input->post('nama_perusahaan', true),
            'email_perusahaan' => $this->input->post('email_perusahaan', true),
            'nomor_telpon_perusahaan' => $this->input->post('nomor_telpon_perusahaan', true),
            'alamat_perusahaan' => $this->input->post('alamat_perusahaan', true),
            'jenis_perusahaan' => $this->input->post('jenis_perusahaan', true),
            'website_perusahaan' => $this->input->post('website_perusahaan', true),
            'psikotes' => 'Menunggu',
            'interview_hrd' => 'Menunggu',
            'interview_user' => 'Menunggu',
            'interview_owner' => 'Menunggu',
            'tes_kesehatan' => 'Menunggu',
            'status_kepastian' => $this->input->post('status_kepastian', true)
        );
        if(($this->Proses_Model->tambah($data, 'data_lamaran')) !== FALSE){
			$this->session->set_flashdata('success', 'Data lamaran mu berhasil disimpan');
		}else{
			$this->session->set_flashdata('error', 'Data lamaran mu gagal disimpan');
		}
        redirect('proses');
    }

    public function ubah($id_lamaran)
    {
        $data = array(
            'tanggal_dikirim' => $this->input->post('tanggal_dikirim', true),
            'posisi_yang_dilamar' => $this->input->post('posisi_yang_dilamar', true),
            'kirim_dari' => $this->input->post('kirim_dari', true),
            'url_info_loker' => $this->input->post('url_info_loker', true),
            'nama_perusahaan' => $this->input->post('nama_perusahaan', true),
            'email_perusahaan' => $this->input->post('email_perusahaan', true),
            'nomor_telpon_perusahaan' => $this->input->post('nomor_telpon_perusahaan', true),
            'alamat_perusahaan' => $this->input->post('alamat_perusahaan', true),
            'jenis_perusahaan' => $this->input->post('jenis_perusahaan', true),
            'website_perusahaan' => $this->input->post('website_perusahaan', true),
            'psikotes' => $this->input->post('psikotes', true),
            'interview_hrd' => $this->input->post('interview_hrd', true),
            'interview_user' => $this->input->post('interview_user', true),
            'interview_owner' => $this->input->post('interview_owner', true),
            'tes_kesehatan' => $this->input->post('tes_kesehatan', true),
            'status_kepastian' => $this->input->post('status_kepastian', true)
        );
        if(($this->Proses_Model->ubah($id_lamaran, $data)) !== FALSE){
            $this->session->set_flashdata('success', 'Data lamaran mu berhasil dirubah');
        }else{
            $this->session->set_flashdata('error', 'Data lamaran mu gagal dirubah');
		}
        redirect('proses');
    }

    public function hapus($id_lamaran)
	{
		$where = array('id_lamaran' => $id_lamaran);
		$this->Proses_Model->hapus($where, 'data_lamaran');
		$this->session->set_flashdata('warning', 'Data lamaran mu berhasil dihapus');
		redirect('proses');
    }
    
    public function menunggu()
    {
        $data['judul'] = 'Semua Lamaran Menungu';
        $data['tampil'] = $this->Proses_Model->tampil_menunggu();
        $this->load->view('layouts/header-2', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('proses/menunggu', $data);
        $this->load->view('layouts/footer');
    }

    public function tidak_ada_kepastian()
	{   
        $data['judul'] = 'Semua Lamaran Tidak Ada Kepstian';
        $data['tampil'] = $this->Proses_Model->tampil_tidak_ada_kepastian();
        $this->load->view('layouts/header-2', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('proses/tidak_ada_kepastian', $data);
        $this->load->view('layouts/footer');
    }

    public function ditolak()
	{   
        $data['judul'] = 'Semua Lamaran Ditolak';
        $data['tampil'] = $this->Proses_Model->tampil_ditolak();
        $this->load->view('layouts/header-2', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('proses/ditolak', $data);
        $this->load->view('layouts/footer');
    }

    public function diterima()
	{   
        $data['judul'] = 'Lamaran Diterima';
        $data['tampil'] = $this->Proses_Model->tampil_diterima();
        $this->load->view('layouts/header-2', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('proses/diterima', $data);
        $this->load->view('layouts/footer');
    }

}