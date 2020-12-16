<?php 

class BannerModel extends CI_Model{

    public function __construct()
    {
        parent::__construct();
    }


    public function add($data)
    {
       $this->db->insert("banner",$data);
    }

    public function getAllBanner()
    {
        return $this->db->get('banner')->result();
    }

    public function getBannerByID($id)
    {
        return $this->db->get_where("banner",["id_banner"=>$id])->result();
    }

    public function delete($id)
    {
        $this->db->where("id_banner",$id);
        $this->db->delete("banner");
    }

    public function update($id,$data)
    {
      $this->db->where("id_banner",$id);
      $this->db->update("banner",$data);
    }
}