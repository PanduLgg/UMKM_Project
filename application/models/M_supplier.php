<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_supplier extends CI_Model
{

    private $table = "tb_satuan";

    public function tampil_data()
    {
        return $this->db->get('tb_satuan');
    }

    public function input_data($data)
    {
        return $this->db->insert('tb_satuan', $data);
    }

    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }


    public function findById($id)
    {
        $this->db->where("id_satuan", $id);
        $query = $this->db->get($this->table);

        return $query->row();
    }
}
