<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Proses_Model extends CI_Model
{
    public function tampil()
    {
        $query = $this->db->query("SELECT * FROM data_lamaran");
        return $query->result();
    }

    public function tambah($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function ubah($id_lamaran, $data)
    {
        $this->db->where('id_lamaran', $id_lamaran);
        $this->db->update('data_lamaran', $data);
    }

    public function hapus($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function tampil_menunggu()
    {
        $query = $this->db->query("SELECT * FROM data_lamaran WHERE status_kepastian = 'Menunggu'");
        return $query->result();
    }

    public function tampil_tidak_ada_kepastian()
    {
        $query = $this->db->query("SELECT * FROM data_lamaran WHERE status_kepastian = 'Tidak Ada Kepastian'");
        return $query->result();
    }

    public function tampil_ditolak()
    {
        $query = $this->db->query("SELECT * FROM data_lamaran WHERE status_kepastian = 'Ditolak'");
        return $query->result();
    }

    public function tampil_diterima()
    {
        $query = $this->db->query("SELECT * FROM data_lamaran WHERE status_kepastian = 'Diterima'");
        return $query->result();
    }
}
