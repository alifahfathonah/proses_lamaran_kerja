<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tidak_Ditemukan extends CI_Controller 
{
    public function index()
    {
        $data['judul'] = '404 Halaman Tidak Ditemukan';
        $this->load->view('tidak_ditemukan', $data);
    }
}