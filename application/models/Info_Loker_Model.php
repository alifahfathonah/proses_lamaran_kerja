<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Info_Loker_Model extends CI_Model
{
    public function total()
    {        
        $query = $this->db->query("SELECT COUNT(id_info_loker) as total FROM data_info_loker");
        return $query->row_array();
    }

    public function tampil()
    {
        $query = $this->db->query("SELECT * FROM data_info_loker");
        return $query->result();
    }

    public function tambah($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function ubah($id_info_loker, $data)
    {
        $this->db->where('id_info_loker', $id_info_loker);
        $this->db->update('data_info_loker', $data);
    }

    public function hapus($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
