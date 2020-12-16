<?php

class WisataModel extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllWisata()
    {
        return $this->db->get("wisata")->result();
    }
    public function getWisataByID($id)
    {
        $this->db->where("id_wisata",$id);
        return $this->db->get("wisata")->result();
    }

    public function addNewWisata($data)
    {
        $this->db->insert("wisata",$data);
    }

    public function delete($id)
    {
        $this->db->where("id_wisata",$id);
        $this->db->delete("wisata");
    }

    public function update($id,$data)
    {
        $this->db->where("id_wisata",$id);
        $this->db->update("wisata",$data);
    }
}