<?php

class M_kategori extends CI_Model
{

    private $table = "tb_kategori";
    protected $id = 'id_kategori';

    public function tampil_data()
    {
        return $this->db->get('tb_kategori');
    }

    public function input_data($data, $table)
    {
        $this->db->insert('tb_kategori', $data);
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

    public function update_data($id, $data, $table)
    {
        $this->db->where($id);
        $this->db->update($table, $data);
    }


    public function findById($id)
    {
        // SELECT * FROM mahasiswa WHERE nim=$id;
        $this->db->where('id_kategori', $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }
}
