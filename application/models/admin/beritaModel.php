<?php

class BeritaModel extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllBerita()
    {
        $this->db->order_by("id_berita","DESC");
        $this->db->order_by("tgl_post","DESC");
        return $this->db->get("berita")->result();
    }
    public function getBeritaByID($id)
    {
        $this->db->where("id_berita",$id);
        return $this->db->get("berita")->result();
    }

    public function addNewBerita($data)
    {
        $this->db->insert("berita",$data);
    }

    public function delete($id)
    {
        $this->db->where("id_berita",$id);
        $this->db->delete("berita");
    }

    public function update($id,$data)
    {
        $this->db->where("id_berita",$id);
        $this->db->update("berita",$data);
    }
}