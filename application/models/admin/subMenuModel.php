<?php

class SubMenuModel extends CI_Model{
    public function __construct()
    {
        parent::__construct();

    }

    public function getAllSubMenu()
    {
        return $this->db->get("submenu")->result();
    }

    public function addNewSubMenu($data)
    {
        $this->db->insert("submenu",$data);
    }

    public function getSubMenuByID($id)
    {
        return $this->db->get_where("submenu",["id"=>$id])->result();
    }

    public function updateSubMenu($id,$data)   
    {
        $this->db->where("id",$id);
        $this->db->update("submenu",$data);
    }

    public function delete($id)
    {
        $this->db->where("id",$id);
        $this->db->delete("submenu");
    }
}