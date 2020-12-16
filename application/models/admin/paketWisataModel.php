<?php 

class PaketWisataModel extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllPaketWisata()
    {
        return $this->db->get("paket_wisata")->result();
    }
    public function getPaketWisataByID($id)
    {
        $this->db->where("id_paket_wisata",$id);
        return $this->db->get("paket_wisata")->result();
    }

    public function addNewPaketWisata($data)
    {
        $this->db->insert("paket_wisata",$data);
    }

    public function delete($id)
    {
        $this->db->where("id_paket_wisata",$id);
        $this->db->delete("paket_wisata");
    }

    public function update($id,$data)
    {
        $this->db->where("id_paket_wisata",$id);
        $this->db->update("paket_wisata",$data);
    }

}