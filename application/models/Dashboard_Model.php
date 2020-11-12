<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_Model extends CI_Model
{   
    public function total()
    {        
        $query = $this->db->query("SELECT COUNT(id_lamaran) as total FROM data_lamaran");
        return $query->row_array();
    }

    
}
