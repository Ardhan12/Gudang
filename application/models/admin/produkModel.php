<?php 

class ProdukModel extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllProduk()
    {
        return $this->db->get("produk")->result();
    }
    public function getProdukByID($id)
    {
        $this->db->where("id_produk",$id);
        return $this->db->get("produk")->result();
    }

    public function addNewProduk($data)
    {
        $this->db->insert("produk",$data);
        return $this->db->insert_id();
    }

    public function delete($id)
    {
        $this->db->where("id_produk",$id);
        $this->db->delete("produk");
    }

    public function update($id,$data)
    {
        $this->db->where("id_produk",$id);
        $this->db->update("produk",$data);
    }

}