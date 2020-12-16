<?php 

class ResourceModel extends CI_Model{

    public function __construct()
    {
        parent::__construct();
    }

    public function getAllResource()
    {
        return $this->db->get("resource_wisata")->result();
    }
    public function getResourceByID($id)
    {
        $this->db->where("id_wisata",$id);
        $this->db->order_by("tgl_post","DESC");
        return $this->db->get("resource_wisata")->result();
    }

    public function addNewResource($data)
    {
        $this->db->insert("resource_wisata",$data);
    }

    public function delete($id)
    {
        $this->db->where("id_resource",$id);
        $this->db->delete("resource_wisata");
    }

    public function update($id,$data)
    {
        $this->db->where("id_resource",$id);
        $this->db->update("resource_wisata",$data);
    }
}