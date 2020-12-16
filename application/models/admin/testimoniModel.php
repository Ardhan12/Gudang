<?php

class TestiMoniModel extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllTestimoni()
    {
        return $this->db->get("testimoni")->result();
    }
    public function getTestimoniByID($id)
    {
        $this->db->where("id_testimoni",$id);
        return $this->db->get("testimoni")->result();
    }

    public function addNewTestimoni($data)
    {
        $this->db->insert("testimoni",$data);
    }

    public function delete($id)
    {
        $this->db->where("id_testi",$id);
        $this->db->delete("testimoni");
    }

    public function update($id,$data)
    {
        $this->db->where("id_testimoni",$id);
        $this->db->update("testimoni",$data);
    }
}