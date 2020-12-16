<?php

class MenuModel extends CI_Model{
    public function getAllMenu()
    {
        return $this->db->get("menu")->result();
    }

    public function addNewMenu($data)
    {
        $this->db->insert("menu",$data);
    }

    public function getMenuById($id)
    {
       return $this->db->get_where("menu",["id"=>$id]);
    }

    public function update($id,$data)
    {
        $this->db->where("id",$id);
        $this->db->update("menu",$data);
    }

    public function delete($id)
    {
        $this->db->where("id",$id);
        $this->db->delete("menu");
    }
}