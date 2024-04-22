<?php

use LDAP\Result;

class M_siswa extends CI_Model
{
    public function create($data)
    {
        return $this->db->insert('siswa', $data);
    }

    public function read()
    {
        $data = $this->db->get('siswa');
        return $data->result();
    }

    public function get_by_nim($nim)
    {
        $data = $this->db->get_where('siswa', array('nim' => $nim));
        return $data->row_array();
    }

    public function update($nim, $data)
    {
        $this->db->where('nim', $nim);
        return $this->db->update('siswa', $data);
    }

    public function delete($nim)
    {
        $this->db->where('nim', $nim);
        return $this->db->delete('siswa');
    }
}
